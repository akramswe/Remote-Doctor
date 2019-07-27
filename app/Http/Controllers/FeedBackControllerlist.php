<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FeedBack;

class FeedBackControllerlist extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function display()
    {
         $feedback = FeedBack::all();
        return view('admin.feedbacklist')->with('feedback', $feedback);
    }
}
