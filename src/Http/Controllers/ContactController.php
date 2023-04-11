<?php

namespace Alooy\Contact\Http\Controllers;

use Alooy\Contact\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request){
        Contact::create($request->all());
    }
}
