<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Content::all();
        return view('admin.content', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist = Category::all();
        return view('admin.content_add', ['datalist' => $datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = new Content;

        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data->category_id = $request->input('category_id');
        $data->user_id = Auth::id();
        $data->type = $request->input('type');
        $data->city = $request->input('city');
        $data->country = $request->input('country');
        $data->location = $request->input('location');
        $data->datetime = $request->input('datetime');
        $data->detail = $request->input('detail');
        if ($request->file('image') != null) {
            $data->image = Storage::putFile('images', $request->file('image'));
        }
        $data->save();
        return redirect()->route('admin_content');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Content $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Content $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content, $id)
    {
        $data = Content::find($id);
        $datalist = Category::all();

        return view('admin.content_edit', ['data' => $data, 'datalist' => $datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Content $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content, $id)
    {
        $data = Content::find($id);
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data->category_id = $request->input('category_id');
        $data->user_id = Auth::id();
        $data->type = $request->input('type');
        $data->city = $request->input('city');
        $data->country = $request->input('country');
        $data->location = $request->input('location');
        $data->datetime = $request->input('datetime');
        $data->detail = $request->input('detail');
        if ($request->file('image') != null) {
            $data->image = Storage::putFile('images', $request->file('image'));
        }
        $data->save();
        return redirect()->route('admin_content');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Content $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content, $id)
    {
        $data = Content::find($id);
        $data->delete();

        return redirect()->route('admin_content');
    }
}
