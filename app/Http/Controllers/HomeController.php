<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Data['model'] = Home::first();
        return view('backend.home.index', $Data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'social_links' => 'nullable|json'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('home_images', 'public');
            $validatedData['image'] = $imagePath;
        }
        // Home::firstOrCreate($validatedData);
        Home::updateOrCreate(['id' => 1], $validatedData); // Assuming 'id' is your primary key
        return redirect()->route('home.index')->with('success', 'Home page data created successfully.');
    }

}
