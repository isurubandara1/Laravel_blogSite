<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function uploadPhoto(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);

        Photo::create([
            'title' => $request->title,
            'image_path' => "uploads/{$imageName}",
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Photo uploaded successfully.');
    }

    public function viewPhotos()
    {
        $photos = Photo::all();
        return view('photos', compact('photos'));
    }
}
