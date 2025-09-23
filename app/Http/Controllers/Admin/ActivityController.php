<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            //code...
            $activities = Activity::all();

            return view('admin.activity.index', compact('activities'));
        } catch (\Exception $e) {
            //throw $th;
            toastr()->error('Une erreur est intervenue au niveau du serveur ! ', $e->getMessage());
            return redirect()->back();
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            //code...
            return view('admin.activity.edit');
        } catch (\Exception $e) {
            //throw $th;
            toastr()->error('Une erreur est intervenue au niveau du serveur ! ', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'description' => ['required', 'string'],
            'image' => ['nullable', 'max:5000', 'image'],
        ], [
            'name.required' => 'Le nom de l\'activité est requis',
            'description.required' => 'La description de l\'activité est requise',
            'image.max' => 'L\'image doit avoir une taille maximale de 5Mo',
            'image.image' => 'Vous devez ajoutez une image',
        ]);

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $folderName = $request->name;
            $uploadFolder = 'assets/img/activity/';
            folderOpen($uploadFolder);
            $imgurl = uploadImage($img, $folderName, $uploadFolder);
        }
        try {
            //code...

            $activity = Activity::create([
                'name' => $request->name,
                'image' => $imgurl ?? null,
                'description' => $request->description,
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
    public function edit($id)
    {
        try {
            $activity = Activity::where('id', $id)->firstOrFail();
            return view('admin.activity.edit', compact('activity'));
        } catch (\Exception $e) {
            //throw $th;
            toastr()->error('Une erreur est intervenue au niveau du serveur ! ', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'description' => ['required', 'string'],
            'image' => ['max:5000', 'image'],
        ], [
            'name.required' => 'Le nom est requis',
            'description.required' => 'La description est requise',
            'image.max' => 'L\'image doit avoir une taille maximale de 5Mo',
            'image.image' => 'Vous devez ajoutez une image',
        ]);

        try {
            //code...
            $activity = Activity::where('id', $id)->firstOrFail();

            if ($request->hasFile('image')) {
                deleteFile($activity->image);

                $img = $request->file('image');
                $folderName = $request->name;
                $uploadFolder = 'assets/img/activity/';
                folderOpen($uploadFolder);
                $imgurl = uploadImage($img, $folderName, $uploadFolder);
            }

            $activity->update([
                'name' => $request->name,
                'description' => $request->description,
                'image' => $imgurl ?? $activity->image,
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
    public function destroy($id)
    {
        try {
            //code...
            $activity = Activity::findOrFail($id);

            deleteFile($activity->image);

            $activity->delete();
            return response()->json(['status' => 'success'], 200);
        } catch (\Exception $e) {
            //throw $th;
            return response()->json(['status' => 'error']);
        }
    }
}
