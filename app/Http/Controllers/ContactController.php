<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $categories = $this->fetchCategories(); // for submenu product

        return view('user.contact_us', compact('categories'));
    }

    public function sendMail(Request $request): RedirectResponse {
        // dd($request->all());

        $data = $request->all();

        Mail::send('user.partials.pages.contact.send_email', ['data' => $data], function($message) use ($data) {
            $message->to('mawardiadama@gmail.com')
                    ->subject($data['subject'])
                    ->from($data['email_user'], $data['name'])
                    ->replyTo($data['email_user']);
        });

        return redirect('/contact-us');
    }
}
