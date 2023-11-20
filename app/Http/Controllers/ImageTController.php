<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Ticket;

class ImageTController extends Controller
{
    public function index()
    {
        $images = Image::with('ticket')->get();
        return view('back.imageT.index', compact('images'));
    }

    public function create()
    {
        $tickets = Ticket::all();
        return view('back.imageT.create', compact('tickets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ticket_id' => 'required|exists:tickets,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $ticket = Ticket::find($request->input('ticket_id')); 

        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(resource_path('assets/img'), $imageName);

        $imageModel = new Image([
            'url' => '/assets/img/'.$imageName,

            'id_ticket' => $ticket->id,
        ]);

        $ticket->images()->save($imageModel);


        return redirect()->route('images.store')->with('success', 'Image added successfully.');
    }

    public function show($id)
    {
        $image = Image::findOrFail($id);
        return view('back.imageT.show', compact('image'));
    }

    public function edit($id)
    {
        $image = Image::findOrFail($id);
        $tickets = Ticket::all();
        return view('back.imageT.edit', compact('image', 'tickets'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'ticket_nom' => 'required|exists:tickets,Nom',
        ]);

        $image = Image::findOrFail($id);
        $ticket = Ticket::where('Nom', $request->input('ticket_nom'))->first();
    
        if ($request->hasFile('image')) {
            $image->url = '/assets/img/' . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('assets/img'), $image->url);
        }
    
        if ($ticket) {
            $image->id_ticket = $ticket->id;
        }
    
        $image->save();
    
        return redirect()->route('images.store', $id)->with('success', 'Image updated successfully.');
    }
    

    public function destroy($id)
    {
        $image = Image::findOrFail($id);
        $imagePath = public_path('assets/img/' . basename($image->url));

        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $image->delete();

        return redirect()->route('images.store')->with('success', 'Image deleted successfully.');
    }
}
