<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function store(Request $request)
    {
        $photo = new Photo;

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/photos', $filename);
            $photo->filename = $filename;
            $photo->path = $path;
        }

        $photo->save();

        return redirect()->back()->with('success', 'Photo uploaded successfully.');
    }
}
