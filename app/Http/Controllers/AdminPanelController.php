<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminPanelController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('pages.admin-panel.panel', compact('contacts'));
    }

    public function store(Request $request)
    {
        $contact = $request->all();
        $validate = Validator::make($contact, [
            'name' => 'required',
            'email' => 'required|email',
        ]);
        if ($validate->fails()) {
            return redirect()->route('admin.panel')->withErrors($validate)->withInput();
        }
        $contact = Contact::create($contact);
        return redirect()->route('home')->with('success', 'your message has been sent');
    }

    public function getMessage(Request $request)
    {
        $contact = Contact::select('message')->where('email', $request->email)->first();
        return response()->json($contact);
    }
}
