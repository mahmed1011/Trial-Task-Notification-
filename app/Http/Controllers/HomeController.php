<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\UserRegisterNotification;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function notify()
    {
        if (auth()->check()) {
            $user = auth()->user();
            $user->notify(new UserRegisterNotification($user));
            // dd('done');
        }
    }


    public function markasread($id)
    {
        if ($id) {
            auth()->user()->unreadnotifications->where('id', $id)->markAsRead();
        }
        return back();
    }
}
