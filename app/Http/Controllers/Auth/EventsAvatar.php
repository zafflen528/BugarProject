<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\File;


class EventsAvatar extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('gantifoto');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            //all inputs validated...
           'image' => ['file|image']
           ]);
           
           
           $user = User::create(
           [
           // all inputs requested...
           'image'=>$request->image
           ]);
           if($request->hasFile('image')){
            $request->file('image')->move('propil/',$request->file('image')->getClientOriginalName());
            $user->image=$request->file('image')->getClientOriginalName();
            $user->save();
        }
           // I log user in and redirect to intended destination
           // Success...was able to output profile photo and other things
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        //$request->validate([
            //all inputs validated...
           //'image' => ['file|image']
          // ]);
           
           $name = $request ->file('image')->getClientOriginalName();
           $request->file('image');
           User::find(Auth::user()->id)->update(['image'=>$name]);
           if($request->hasFile('image')){
            $request->file('image')->move('propil/',$request->file('image')->getClientOriginalName());
            
            
        }
        return redirect('/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        
    }
}
