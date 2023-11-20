<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moyen; 

class MoyenController extends Controller
{
    public function __construct()
    {
        $this->middleware('validate.moyen.input')->only('store','update');
    }

    public function index()
    {
        $moyens = Moyen::all();
        return view ('back.moyens.index')->with('moyen', $moyens);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.moyens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Moyen::create($input);
        return redirect('moyenTransport')->with('message', 'New mean of transport Addedd!');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $moyen = Moyen::find($id);
        return view('back.moyens.show')->with('moyen', $moyen);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $moyen = Moyen::find($id);
        return view('back.moyens.edit')->with('moyen', $moyen);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $moyen = Moyen::find($id);
        $input = $request->all();
        $moyen->update($input);
        return redirect('moyenTransport')->with('message', 'mean Updated Successfully!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Moyen::destroy($id);
        return redirect('moyenTransport')->with('message','mean Deleted Successfully');  
    }
}
