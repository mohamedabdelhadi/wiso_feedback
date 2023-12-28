<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelfieMirrorController extends Controller
{
    public function selfie()
    {


        return view('selfie');
    }

    public function sendSelfiesas(Request $request)
    {
        try {
            $imageData = $request->input('image');
            $fileName = $request->input('fileName');

            if (!$imageData || !$fileName) {
                return response()->json(['error' => 'Invalid data'], 400);
            }

            // Remove the data:image/jpeg;base64, prefix if present
            $imageData = preg_replace('/data:image\/jpeg;base64,/', '', $imageData);

            $decodedImage = base64_decode($imageData);

            $folderPath = public_path('selfies');
            $filePath = $folderPath . '/' . $fileName . '.jpeg';

            if (!is_dir($folderPath)) {
                mkdir($folderPath, 0777, true);
            }

            file_put_contents($filePath, $decodedImage);

            return response()->json(['message' => 'Image uploaded successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
