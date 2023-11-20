<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image; 
use App\Models\Moyen; 

class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('validate.image.input')->only('store','update');
    }

    public function index()
    {
        $images = Image::all();
        return view ('back.images.index')->with('image', $images);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $moyens = Moyen::all();
        return view('back.images.create')->with('moyens', $moyens);
    }


    public function store(Request $request)
    {
        $moyen = Moyen::findOrFail($request->moyen_id);

        $image = new Image; 
        $image->path = $request->path ; 

        $moyen->images()->save($image);

        return redirect('imageMoyen')->with('message', 'New image Addedd!');  

        
    }


    public function edit($id)
    {
        $moyens = Moyen::all();
        $images = Image::find($id);
        return view('back.images.edit')->with('moyens',$moyens)->with('images', $images);
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
        $moyen = Moyen::findOrFail($request->moyen_id);
        $moyen->images()->where('id',$id)->update([
            'path' => $request->path,
            'moyen_id' => $moyen->id
        ]);

        return redirect('imageMoyen')->with('message', 'Image updated Successfully!!');  

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Image::destroy($id);
        return redirect('imageMoyen')->with('message','Image Deleted Successfully');  
    }
}
