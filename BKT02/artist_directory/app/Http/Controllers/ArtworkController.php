<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artworks = Artwork::all();
	    $successMessage = session('success');
	    return view('artwork', compact('artworks', 'successMessage'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artwork_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'artist_name' => 'required',
            'description' => 'required',
            'art_type' => 'required',
            'media_link' => 'required',
            'cover_image' => 'required',

        ]);
        Artwork::create($data);

        return redirect() -> route('artworks.index')->with('success', 'Thêm mới thành công');

    }

    /**
     * Display the specified resource.
     */
    public function show(Artwork $artwork)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artwork $artwork)
    {
        return view('artwork_edit', compact('artwork'));
    }

    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artwork $artwork)
    {
        $validatedData = $request->validate([
            'artist_name' => 'required',
            'description' => 'required', 
            'art_type' => 'required',
            'media_link' => 'required',
            'cover_image' => 'required',
        ]);
    
        $artwork->update($validatedData);
    
        return redirect()->route('artworks.index')->with('success', 'Thông tin họa sĩ đã được cập nhật.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artwork $artwork)
    {
        $artwork->delete();

        return redirect()->route('artworks.index')->with('success', 'Họa sĩ đã được xóa thành công.');

    }
}
