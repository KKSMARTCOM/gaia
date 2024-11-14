<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::first();
        return view('admin.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd($request->all());
        $about = About::where('id', $id)->firstOrFail();

        $request->validate([
            'title' => ['required', 'max:200'],
            'image' => ['max:5000', 'image'],
            'description' => ['required']
        ], [
            'image.max' => 'L\'image doit avoir une taille maximale de 5Mo',
            'image.image' => 'Vous devez ajoutez une image',
        ]);

        if ($request->hasFile('image')) {

            if ($about->image) {
                deleteFile($about->image);
            }

            $img = $request->file('image');
            $folderName = $request->title;
            $uploadFolder = 'assets/img/abouts/';
            folderOpen($uploadFolder);
            $imgurl = uploadImage($img, $folderName, $uploadFolder);

            $about->update([
                'image' => $imgurl,
            ]);
            //dd($imgurl);
        }

        About::updateOrCreate(
            ['id' => $id],
            [
                'title' => $request->title,
                'description' => $request->description,
            ]
        );

        toastr()->success('Mise à jour éffectuée avec succès', 'Félicitations !');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
