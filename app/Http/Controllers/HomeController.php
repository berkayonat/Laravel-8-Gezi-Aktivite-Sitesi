<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function categoryList()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function getSetting()
    {
        return Setting::first();
    }

    public function index()
    {
        $setting = Setting::first();
        $slider = Content::select('id','title','country','city','location','slug')->where('status','=','True')->where('type','=','Activity')->limit(3)->inRandomOrder()->get();
        $home = Content::select('id','title','country','city','location','image','slug')->where('status','=','True')->where('type','=','Activity')->limit(4)->latest()->get();
        $blog = Content::select('id','title','country','city','location','image','slug')->where('status','=','True')->where('type','=','Blog')->limit(4)->latest()->get();
        $data = [
            'setting' => $setting,
            'slider' => $slider,
            'home' => $home,
            'blog' => $blog
        ];

        return view('home.index',$data);
    }

    public function content($id,$slug)
    {
        $data = Content::find($id);
        $datalist = Image::where('content_id',$id)->get();
        $category = Category::where('id',$data->category_id)->get();
        #print_r($category);
        #exit();
        return view('home.content_detail',['data'=>$data, 'datalist' => $datalist, 'category' => $category]);
    }

    public function blogdetail($id,$slug)
    {
        $data = Content::find($id);
        $datalist = Image::where('content_id',$id)->get();
        $category = Category::where('id',$data->category_id)->get();
        #print_r($category);
        #exit();
        return view('home.blog_detail',['data'=>$data, 'datalist' => $datalist, 'category' => $category]);
    }

    public function getcontent(Request $request)
    {
        $search = $request->input('search');
        $count = Content::where('title','like', '%'.$search.'%')->get()->count();
        if($count==1)
        {
            $data = Content::where('title','like', '%'.$search.'%')->first();

            return redirect()->route('content',['id'=>$data->id,'slug'=>$data->slug]);
        }
        else
        {
            return redirect()->route('contentlist',['search'=>$search]);
        }

    }

    public function contentlist($search)
    {
        $datalist=Content::where('title','like', '%'.$search.'%')->get();
        return view('home.search_contents', ['datalist' => $datalist, 'search'=>$search]);
    }

    public function categorycontents($id,$slug)
    {
        $datalist = Content::where('category_id',$id,)->where('status','=','True')->where('type','=','Activity')->latest()->get();
        $data = Category::find($id);
        $setting = Setting::first();
        #print_r($data);
        #exit();
        return view('home.category_contents', ['datalist' => $datalist, 'data'=>$data, 'setting'=>$setting]);
    }
    public function blog()
    {
        $datalist = Content::where('status','=','True')->where('type','=','Blog')->latest()->get();
        $setting = Setting::first();

        return view('home.blog', ['datalist' => $datalist,'setting'=>$setting]);
    }

    public function faq()
    {
        $datalist = Faq::all()->where('status','=','True')->sortBy('position');
        return view('home.faq', ['datalist' => $datalist]);
    }

    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about', ['setting' => $setting]);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', ['setting' => $setting]);
    }

    public function sendmessage(Request $request)
    {
        $data = new Message();

        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = $request->ip();

        $data->save();
        return redirect()->route('contact')->with('success', 'Message sent successfully.');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
        } else {
            return view('admin.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
