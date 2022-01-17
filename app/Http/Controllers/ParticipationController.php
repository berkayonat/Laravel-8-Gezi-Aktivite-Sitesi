<?php

namespace App\Http\Controllers;

use App\Models\Participation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ParagonIE\ConstantTime\Base32;

class ParticipationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Participation::where('user_id', Auth::id())->get();
        return view('home.user_participation', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $data = Participation::where('content_id', $id)->where('user_id', Auth::id())->first();
        if ($data) {
            return back()->with('warning', 'You are already a participant.');
        } else {
            $data = new Participation;

            $data->content_id = $id;
            $data->user_id = Auth::id();

            $data->save();
            return back()->with('success', 'You have successfully participated.');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Participation $participation
     * @return \Illuminate\Http\Response
     */
    public function show(Participation $participation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Participation $participation
     * @return \Illuminate\Http\Response
     */
    public function edit(Participation $participation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Participation $participation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participation $participation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Participation $participation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participation $participation, $id)
    {
        $data = Participation::find($id);
        $data->delete();

        return back()->with('success', 'Participation Deleted Successfully');
    }
}
