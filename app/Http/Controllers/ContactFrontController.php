<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Carbon;
class ContactFrontController extends Controller
{

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('front.contact');

    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $request->validate([
            'message' => 'required',
            'obj_message' => 'required',
           
            
        ]);
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        $currentDateTime = Carbon::now();
        $data['date'] = $currentDateTime;

        Contact::create($data);

        

        return redirect()->route('home')
            ->with('success', 'Contact created successfully.');
    }
}