<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $filename = time() . '_' . $file->getClientOriginalName();
            Storage::putFileAs('public/images', $file, $filename);

            $url = Storage::url('images/' . $filename);

            return response()->json(['uploaded' => true, 'url' => $url]);
        }

        return response()->json(['uploaded' => false, 'error' => ['message' => 'Nie udało się przesłać obrazu']]);
    }
}
