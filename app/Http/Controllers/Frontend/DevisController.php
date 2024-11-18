<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        'autre_document' => 'nullable|file|mimes:pdf,dwg', // Nouveau champ
    ]);

    $pathPlan = null;
    $pathAutreDocument = null;

    if ($request->hasFile('plan_topographique')) {
        $pathPlan = $request->file('plan_topographique')->store('public/plans');
        $pathPlan = str_replace('public/', '', $pathPlan);
    }

    if ($request->hasFile('autre_document')) {
        $pathAutreDocument = $request->file('autre_document')->store('public/plans');
        $pathAutreDocument = str_replace('public/', '', $pathAutreDocument);
    }

    Mail::send('mail.demande_devis', [
        'societe' => $validated['societe'],
        'email' => $validated['email'],
        'nom' => $validated['nom'],
        'prenoms' => $validated['prenoms'],
        'adresseintervention' => $validated['adresseintervention'],
        'projetMessage' => $validated['message'],
        'plan_topographique' => $pathPlan,
        'autre_document' => $pathAutreDocument,
    ], function ($message) use ($validated, $pathPlan, $pathAutreDocument) {
        $message->to($validated['email'])
                ->subject('Demande de devis de ' . $validated['societe'])
                ->from('dakevelyne@gmail.com', 'Gaia');

        if ($pathPlan) {
            $message->attach(storage_path('app/public/' . $pathPlan));
        }

        if ($pathAutreDocument) {
            $message->attach(storage_path('app/public/' . $pathAutreDocument));
        }
    });

    return redirect()->back()->with('success', 'Votre demande de devis a été envoyée avec succès.');
}

}
