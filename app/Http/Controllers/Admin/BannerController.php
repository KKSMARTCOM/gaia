<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\BannerDataTable;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.setting.general-setting.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'max:5000', 'image'],
        ], [
            'image.required' => 'L\'image est requise',
            'image.max' => 'L\'image doit avoir une taille maximale de 5Mo',
            'image.image' => 'Vous devez ajoutez une image',
        ]);

        //dd($request->all());

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $folderName = $request->name;
            $uploadFolder = 'assets/img/banners/';
            folderOpen($uploadFolder);
            $imgurl = uploadImage($img, $folderName, $uploadFolder);
        }
        //
        try {
            //code...
            Banner::create([
                'image' => $imgurl
            ]);

            toastr()->success('Image de la bannière ajoutée avec succès.', 'Félicitations !');

            return redirect()->back();
        } catch (\Exception $e) {
            //throw $th;
            toastr()->error('Une erreur est intervenue au niveau du serveur ! ', $e->getMessage());
            return redirect()->back();
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try {
            //code...
            $banner = Banner::where('id', $id)->firstOrFail();
            $banner->delete();
            return response()->json(['status' => 'success'], 200);
        } catch (\Exception $e) {
            //throw $th;
            return response()->json(['status' => 'error']);
        }
    }
}
