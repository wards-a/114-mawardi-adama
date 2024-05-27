<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function setFlashMessage(Request $request)
    {
        $message = $request->get('message');

        if (!empty($message)) {
            Session::flash('success', $message); // Flash message key and value
            return response()->json(['success' => true]); // Optional: Confirmation response
        } else {
            return response()->json(['success' => false, 'error' => 'Missing message parameter'], 422); // Error response for missing message
        }
    }
}
