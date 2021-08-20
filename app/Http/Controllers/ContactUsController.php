<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUsMessage;
use Illuminate\Support\Facades\Mail;

use function React\Promise\reduce;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contactus', [
            'title' => 'Contact Us'
        ]);
    }
    public function sendMessage(Request $req)
    {
        $this->validate($req, [

            'name' => "required|string",
            "subject" => "required|string",
            "email" => "required|string",
            "message" => "required|string"
        ]);

        Mail::to(setting('site.email'))->send(new ContactUsMessage($req));
        $req->session()->flash('success', "Thanks for contact us .we will intouch soon");
        return redirect()->back();
    }
}
