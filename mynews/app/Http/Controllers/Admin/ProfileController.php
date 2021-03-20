<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profiles;

class ProfileController extends Controller
{
    //
    public function add()
    {
        return view('admin.profile.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Profiles::$rules);
        
        $profile = new Profiles;
        $form = $request->all();
        
    
       
        unset($form['_token']);
        unset($form['image']);
        $profile->fill($form);
        $profile->save();
    
        return redirect('admin/profile/create');
    }
    public function edit()
    {
        return view('admin.profile.edit');
    }
    
    public function update()
    {
        return redirect('admin/profile/create');
    }
    
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title !='') {
            $posts = Profiles::where('title', $cond_title)->get();
        } else {
            $posts = Profiles::all();
        }
        return view('admin.profile.index', ['posts' => $posts,'cond_title' => $cond_title]);
    }
}
