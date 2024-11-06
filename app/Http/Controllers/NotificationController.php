<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = auth()->check() ? auth()->user()->notifications()->latest()->get() : [];

        return view('notification', compact('notifications'));
    }
}
