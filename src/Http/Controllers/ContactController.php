<?php

namespace Mamun\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Mamun\Contact\Mail\ContactMailable;
use Mamun\Contact\Models\Contact;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact::contact');
    }


    public function send(Request $request)
    {
        $data = $request->all();

        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($data['message'], $data['name']));

        Contact::create($data);

        return redirect()->route('contact');
    }
}
