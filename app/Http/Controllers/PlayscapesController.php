<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\File;

class PlayscapesController extends Controller
{
    // public function gallery()
    // {
    //     // Define the path to your images directory
    //     $path = public_path('images/playsets');

    //     // Fetch all image files from the directory
    //     $images = File::files($path);

    //     // Pass the images array to the view
    //     return view('gallery', compact('images'));
    // }
    public function gallery()
    {
        // Define the path to your images directory
        $path = public_path('images/playsets');

        // Fetch all image files from the directory
        $images = File::files($path);

        // Convert the array to a Laravel Collection
        $imagesCollection = collect($images);

        // Set the current page and how many items you want per page
        $perPage = 11; // Change this value as needed
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        // Slice the collection to get the items for the current page
        $currentItems = $imagesCollection->slice(($currentPage - 1) * $perPage, $perPage)->all();

        // Create a LengthAwarePaginator instance
        $paginatedImages = new LengthAwarePaginator($currentItems, $imagesCollection->count(), $perPage, $currentPage, [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
        ]);

        // Pass the paginated images to the view
        return view('gallery', ['images' => $paginatedImages]);
    }

    public function contact_us(){
        return view('contact_us');
    }
}
