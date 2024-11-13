<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller; // Import du contrôleur de base
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;

class DevisController extends Controller
{
    public function envoyerDevis(Request $request)
{
    // Validation des données du formulaire
    $validated = $request->validate([
        'societe' => 'required|string',
        'email' => 'required|email',
        'nom' => 'required|string',
        'prenoms' => 'required|string',
        'adresseintervention' => 'required|string',
        'message' => 'required|string',
        'plan_topographique' => 'nullable|file|mimes:pdf,dwg',
    ]);

    // Si le fichier est téléchargé, on le stocke temporairement
    $path = null;
    if ($request->hasFile('plan_topographique')) {
        $path = $request->file('plan_topographique')->store('plans');
    }

    // Envoi de l'e-mail
    Mail::send('mail.demande_devis', [
        'societe' => $validated['societe'],
        'email' => $validated['email'],
        'nom' => $validated['nom'],
        'prenoms' => $validated['prenoms'],
        'adresseintervention' => $validated['adresseintervention'],
        'projetMessage' => $validated['message'], // Nouveau nom pour éviter conflit
        'plan_topographique' => $path,
    ], function ($message) use ($validated, $path) {
        $message->to($validated['email']) // Adresse du destinataire
                ->subject('Demande de devis de ' . $validated['societe'])
                ->from('dakevelyne@gmail.com', 'Gaia');

        // Joindre le fichier si disponible
        if ($path) {
            $message->attach(storage_path('app/' . $path));
        }
    });

    // Retour avec message de succès
    return redirect()->back()->with('success', 'Votre demande de devis a été envoyée avec succès.');
}


}
