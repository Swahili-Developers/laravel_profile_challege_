<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getContacts(){
        $contacts = User::all();
        return view('index',compact('contacts'));
    }

    public function viewContacts($id){
        $detail = User::find($id);
        return view('welcome',compact('detail'));
    }
}
