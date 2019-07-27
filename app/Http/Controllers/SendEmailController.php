<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    function inbox()
    {
     return view('admin.inbox');
    }


    function index()
    {
     return view('admin.compose');
    }

    function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required'
     ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message
        );

        $email = array('email' => $request->email, );

        //Mail::to($user)->send(new Hello($user));

     Mail::to($email)->send(new SendMail($data));
     return back()->with('success', 'Send Email Successfully!');

    }
}

?>
