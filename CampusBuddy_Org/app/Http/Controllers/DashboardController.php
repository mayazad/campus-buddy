<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{
    public function index()
    {
        // Manual session check as per legacy behavior
        if (!session()->has('user')) {
            return redirect()->route('login');
        }

        $user = session('user');

        // Logic to get images
        $imageDir = public_path('assets/eventImage');
        $displayImages = [];

        if (File::exists($imageDir)) {
            $files = File::files($imageDir);
            foreach ($files as $file) {
                if (in_array(strtolower($file->getExtension()), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                    $displayImages[] = $file->getFilename();
                }
            }
        }

        // Logic to duplicate if low count (legacy logic)
        // Original logic: ensure at least 10, then slice to 20max.
        $images = $displayImages;
        if (!empty($images)) {
            while (count($displayImages) < 10) {
                $displayImages = array_merge($displayImages, $images);
            }
            if (count($displayImages) > 20) {
                $displayImages = array_slice($displayImages, 0, 20);
            }
        }

        return view('dashboard.index', compact('user', 'displayImages'));
    }
}
