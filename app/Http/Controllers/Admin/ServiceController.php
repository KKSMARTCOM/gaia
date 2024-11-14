<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\DataTables\ServiceDataTable;
use App\Http\Controllers\Controller;
use App\Models\Commune;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            //code...
            $services = Service::all();

            return view('admin.service.index', compact('services'));
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
            $communes = Commune::all();
            return view('admin.service.edit', compact('communes'));
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
            'title' => ['required', 'max:200'],
            'description' => ['required', 'string'],
            'image' => ['required', 'max:5000', 'image'],
            'base_price' => ['required', 'numeric', 'min:0'],
            'additionnal_price' => ['required', 'array'],
            'additionnal_price.*' => ['nullable', 'numeric', 'min:0']
        ], [
            'title.required' => 'Le titre du service est requis',
            'description.required' => 'La description est requise',
            'base_price.required' => 'Le prix de base est obligatoire',
            'additionnal_price.required' => 'Le prix additionnel est obligatoire',
            'image.required' => 'L\'image est requise',
            'image.max' => 'L\'image doit avoir une taille maximale de 5Mo',
            'image.image' => 'Vous devez ajoutez une image',
        ]);

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $folderName = $request->name;
            $uploadFolder = 'assets/img/services/';
            folderOpen($uploadFolder);
            $imgurl = uploadImage($img, $folderName, $uploadFolder);
        }
        try {
            //code...

            $service = Service::create([
                'title' => $request->title,
                'image' => $imgurl,
                'description' => $request->description,
                'base_price' => $request->base_price,
            ]);

            foreach ($request->additionnal_price as $communeId => $price) {
                $service->communes()->attach($communeId, ['additional_price' => $price ?? 0]);
            }

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
            //code...
            $communes = Commune::all();
            $service = Service::where('id', $id)->with('communes')->firstOrFail();
            return view('admin.service.edit', compact('service', 'communes'));
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
            'title' => ['required', 'max:200'],
            'description' => ['required', 'string'],
            'image' => ['max:5000', 'image'],
            'base_price' => ['required', 'numeric', 'min:0'],
            'additionnal_price' => ['required', 'array'],
            'additionnal_price.*' => ['nullable', 'numeric', 'min:0']
        ], [
            'title.required' => 'Le titre du service est requis',
            'description.required' => 'La description est requise',
            'base_price.required' => 'Le prix de base est obligatoire',
            'additionnal_price.required' => 'Le prix additionnel est obligatoire',
            'image.max' => 'L\'image doit avoir une taille maximale de 5Mo',
            'image.image' => 'Vous devez ajoutez une image',
        ]);

        try {
            //code...
            $service = Service::where('id', $id)->firstOrFail();

            if ($request->hasFile('image')) {
                deleteFile($service->image);

                $img = $request->file('image');
                $folderName = $request->name;
                $uploadFolder = 'assets/img/services/';
                folderOpen($uploadFolder);
                $imgurl = uploadImage($img, $folderName, $uploadFolder);
            }

            $service->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $imgurl ?? $service->image,
                'base_price' => $request->base_price,
            ]);

            foreach ($request->additionnal_price as $communeId => $price) {
                $price = $price ?? 0;
                $service->communes()->updateExistingPivot($communeId, ['additional_price' => $price]);
            }

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
            $service = Service::findOrFail($id);

            deleteFile($service->image);

            $service->delete();
            return response()->json(['status' => 'success'], 200);
        } catch (\Exception $e) {
            //throw $th;
            return response()->json(['status' => 'error']);
        }
    }
}
