<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    // public function uploadImage(Request $request)
    // {
    // // http://192.168.1.81:8000/
    //     try {
    //         if ($request->hasFile('image')) {
    //             $file = $request->file('image');
    //             $imageName = time() . '.' . $file->getClientOriginalExtension();
    //             $file->storeAs('public/uploads', $imageName);

    //             return response()->json([
    //                 'success' => true,
    //                 'image_url' => url('storage/uploads/' . $imageName),
    //             ], 200);
    //         } else {
    //             return response()->json(['success' => false, 'message' => 'No image provided.'], 400);
    //         }
    //     } catch (\Exception $e) {
    //         return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
    //     }
    // }

    public function get(){

        return response()->json([
            'success' => true,
            'message' => 'Welcome to the image upload API',
            'img'=>['http://192.168.1.81:8000/uploads/1728718793.jpg','http://192.168.1.81:8000/uploads/1728718793.jpg','http://192.168.1.81:8000/uploads/1728718793.jpg']
        ], 200);
    }

    public function text() {
        return response()->json([
            'success' => true,
            'message' => 'Welcome to the image upload API',
            'text' => 'My name is Isuru',
        ], 200);
    }
    
}
