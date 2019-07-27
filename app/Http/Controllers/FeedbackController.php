<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FeedBack;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('feedback.feedback');
    }

    public function create()
    {
        return view('feedback.feedback');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
        $feedback = new FeedBack();
        $feed_id=0;
        $feedback->feed_id =(1);
        $feedback->feed_name = $request->input('feed_name');
        $feedback->experience = $request->input('experience');
        $feedback->comments = $request->input('comments');
        $feedback->email = $request->input('email');

        $feedback->save();

        return view('feedback.feedback')->with('add_feedback', $feedback);

    }
}
