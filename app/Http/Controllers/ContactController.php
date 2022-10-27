<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);


        if ($validator->stopOnFirstFailure()->fails()) {
            $errors = $validator->errors();
            return $errors->first();
        }


        Contact::create([
            'ip' => $request->ip(),
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);


        return 'OK';
    }
}
