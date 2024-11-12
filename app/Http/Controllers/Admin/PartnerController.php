<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('admin.partner.index', compact('partners'));
    }

    public function create()
    {
        //
        return view('admin.partner.create');
    }


    public function store(Request $request)
{
    $request->validate([
        'nom' => 'required|string|max:255',
        'image' => ['required', 'image', 'max:5000'],
    ], [
        'nom.required' => 'Le nom est requis',
        'image.required' => 'L\'image est requise',
        'image.max' => 'L\'image doit avoir une taille maximale de 5Mo',
        'image.image' => 'Vous devez ajouter une image',
    ]);

    if ($request->hasFile('image')) {
        $img = $request->file('image');
        $folderName = $request->nom;
        $uploadFolder = 'assets/img/partners/';
        folderOpen($uploadFolder);
        $imgurl = uploadImage($img, $folderName, $uploadFolder);
    }

    try {
        Partner::create([
            'nom' => $request->nom,
            'image' => $imgurl
        ]);

        toastr()->success('Partenaire ajouté avec succès.', 'Félicitations !');
        return redirect()->route('admin.partner.index');
    } catch (\Exception $e) {
        toastr()->error('Une erreur est intervenue au niveau du serveur !', $e->getMessage());
        return redirect()->back();
    }
}


    
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        
        try {
            
            $partner = Partner::where('id', $id)->firstOrFail();
            $partner->delete();
            return response()->json(['status' => 'success'], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error']);
        }
    }
}
