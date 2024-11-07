<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $achievements = Achievement::all();
        return view('admin.achievement.index', compact('achievements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.achievement.edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => ['required', 'max:200'],
            'image' => ['required', 'max:5000', 'image'],
            'description' => ['required'],
        ], [
            'title.required' => 'Le titre du poste est requis',
            'description.required' => 'La description est requise',
            'image.required' => 'L\'image est requise',
            'image.max' => 'L\'image doit avoir une taille maximale de 5Mo',
            'image.image' => 'Vous devez ajoutez une image',
        ]);

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $folderName = $request->name;
            $uploadFolder = 'assets/img/achievements/';
            folderOpen($uploadFolder);
            $imgurl = uploadImage($img, $folderName, $uploadFolder);
        }

        try {
            //code...
            Achievement::create([
                'title' => $request->title,
                'description' => $request->description,
                'email' => $request->email,
                'image' => $imgurl,
            ]);

            toastr()->success('Ajout éffectué avec succès', 'Félicitations !');

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
        try {
            //code...
            $achievement = Achievement::where('id', $id)->firstOrFail();
            return view('admin.achievement.edit', compact('achievement'));
        } catch (\Exception $e) {
            //throw $th;
            toastr()->error('Une erreur est intervenue au niveau du serveur ! ', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'title' => ['required', 'max:200'],
            'image' => ['max:5000', 'image'],
            'description' => ['required'],
        ], [
            'title.required' => 'Le titre du poste est requis',
            'description.required' => 'La description est requise',
            'image.max' => 'L\'image doit avoir une taille maximale de 5Mo',
            'image.image' => 'Vous devez ajoutez une image',
        ]);

        try {
            //code...
            $achievement = Achievement::where('id', $id)->firstOrFail();

            if ($request->hasFile('image')) {
                deleteFile($achievement->image);

                $img = $request->file('image');
                $folderName = $request->name;
                $uploadFolder = 'assets/img/achievements/';
                folderOpen($uploadFolder);
                $imgurl = uploadImage($img, $folderName, $uploadFolder);
            }

            $achievement->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $imgurl ?? $achievement->image,
            ]);

            toastr()->success('Mise à jour éffectuée avec succès', 'Félicitations !');

            return redirect()->back();
        } catch (\Exception $e) {
            //throw $th;
            toastr()->error('Une erreur est intervenue au niveau du serveur ! ', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try {
            //code...
            $achievement = Achievement::where('id', $id)->firstOrFail();

            deleteFile($achievement->image);

            $achievement->delete();
            return response()->json(['status' => 'success'], 200);
        } catch (\Exception $e) {
            //throw $th;
            return response()->json(['status' => 'error']);
        }
    }
}
