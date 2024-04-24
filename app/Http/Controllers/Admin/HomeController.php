<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Event;

class HomeController
{
    public function index()
    {
        $userCount = User::count();
        $eventCount = Event::count();
        return view('home', compact('userCount', 'eventCount'));
    }
}
