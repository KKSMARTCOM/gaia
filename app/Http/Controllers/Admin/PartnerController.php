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

        $imgurl = null;
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

    public function edit(string $id)
    {
        $partner = Partner::findOrFail($id);
        return view('admin.partner.edit', compact('partner'));
    }

    public function update(Request $request, string $id)
    {
        // Validation des champs
        $request->validate([
            'nom' => 'required|string|max:255',
            'image' => ['nullable', 'image', 'max:5000'],
        ], [
            'nom.required' => 'Le nom est requis',
            'image.max' => 'L\'image doit avoir une taille maximale de 5Mo',
            'image.image' => 'Vous devez ajouter une image valide',
        ]);

        // Récupérer le partenaire à partir de son ID
        $partner = Partner::findOrFail($id);

        // Mise à jour des informations du partenaire
        $partner->nom = $request->nom;

        // Si une image est envoyée, gérer l'upload
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $folderName = $request->nom; // Le nom du partenaire peut être utilisé comme nom de dossier
            $uploadFolder = 'assets/img/partners/';
            folderOpen($uploadFolder);  // Fonction pour ouvrir le dossier si nécessaire
            $partner->image = uploadImage($img, $folderName, $uploadFolder);  // Assurez-vous d'avoir une fonction uploadImage définie
        }

        // Sauvegarder les modifications
        try {
            $partner->save();
            toastr()->success('Partenaire mis à jour avec succès.', 'Félicitations !');
            return redirect()->route('admin.partner.index')->with('success', 'Partenaire mis à jour avec succès.');
        } catch (\Exception $e) {
            toastr()->error('Une erreur est survenue : ' . $e->getMessage());
            return redirect()->back();
        }
    }

    public function destroy(string $id)
    {
        try {
            $partner = Partner::findOrFail($id);
            $partner->delete();
            return response()->json(['status' => 'success'], 200);
        } catch (\Exception $e) {
            toastr()->error('Erreur lors de la suppression du partenaire.');
            return response()->json(['status' => 'error']);
        }
    }
}
