<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ClubController extends Controller
{
    public function index()
    {
        $clubs = Club::all();

        return view('index', compact('clubs'));
    }

    public function create()
    {
        return view('create_edit');
    }

    public function edit(Club $club)
    {
        return view('create_edit', compact('club'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|min:3|max:50',
            'president' => 'required|string|min:3|max:255',
            'date_found' => 'required|date|before_or_equal:today',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $club = new Club();
    
        $club->name = $data['name'];
        $club->president = $data['president'];
        $club->date_found = $data['date_found'];
        $club->description = $data['description'];
    
        $manager = new ImageManager(new Driver()); 
        $uploadedImage = $request->file('image');
    
        $image = $manager->read($uploadedImage)->scale(width: 150, height: 150);
   
        $filename = time() . '.' . $uploadedImage->getClientOriginalExtension();
        $path = 'storage/' . $filename;
        $destinationPath = public_path('storage');
    
        $image->save($destinationPath . '/' . $filename);
    
        $club->image = $path;
    
        $club->save();
    
        return redirect('/clubs');
    }
    

    public function update(Request $request, Club $club)
    {
        $data = $request->validate([
            'name' => 'required|string|min:3|max:50',
            'president' => 'required|string|min:3|max:255',
            'date_found' => 'required|date|before_or_equal:today',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        $club->name = $data['name'];
        $club->president = $data['president'];
        $club->date_found = $data['date_found'];
        $club->description = $data['description'];
    
        $manager = new ImageManager(new Driver()); 
        $uploadedImage = $request->file('image');
    
        $image = $manager->read($uploadedImage)->scale(width: 150, height: 150);
   
        $filename = time() . '.' . $uploadedImage->getClientOriginalExtension();
        $path = 'storage/' . $filename;
        $destinationPath = public_path('storage');
    
        $image->save($destinationPath . '/' . $filename);
    
        $club->image = $path;

        $club->update();

        return redirect('/clubs');
    }

    public function show(Club $club)
    {
        return view('club', compact('club'));
    }

    public function destroy(Club $club)
    {
        $club->delete();
        return redirect('/clubs');
    }
}
