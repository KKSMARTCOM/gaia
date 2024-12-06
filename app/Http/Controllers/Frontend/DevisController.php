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
            'societe' => 'nullable|string',
            'email' => 'required|email',
            'nom' => 'required|string',
            'prenoms' => 'required|string',
            'adresseintervention' => 'required|string',
            'message' => 'required|string',
            'plan_topographique' => 'nullable|file|mimes:pdf,dwg|max:10204',
            'autre_document' => 'nullable|file|mimes:pdf,dwg|max:10204',
        ], [
            /* 'societe.required' => 'Le nom de la société est obligatoire.', */
            'societe.string' => 'Le nom de la société doit être une chaîne de caractères.',

            'email.required' => 'Le nom de famille est obligatoire.',
            'email.email' => 'L\'email doit être un email valide.',

            'nom.required' => 'Le nom de famille est obligatoire.',
            'nom.string' => 'Le nom de famille doit être une chaîne de caractères.',

            'prenoms.required' => 'Le prénom est obligatoire.',
            'prenoms.string' => 'Le prénom doit être une chaîne de caractères.',

            'adresseintervention.required' => 'L\'adresse d\'intervention est obligatoire.',
            'adresseintervention.string' => 'L\'adresse d\'intervention doit être une chaîne de caractères.',

            'message.required' => 'Le message est obligatoire.',
            'message.string' => 'Le message doit être une chaîne de caractères.',

            'plan_topographique.file' => 'Le plan topographique doit être un fichier.',
            'plan_topographique.mimes' => 'Le plan topographique doit être un fichier de type pdf.',
            'plan_topographique.max' => 'Le plan topographique ne doit pas dépasser 10MB.',

            'autre_document.file' => 'Le document supplémentaire doit être un fichier.',
            'autre_document.mimes' => 'Le document supplémentaire doit être un fichier de type pdf.',
            'autre_document.max' => 'Le document supplémentaire ne doit pas dépasser 10MB.',
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
                ->from('kksmartcom.bj@gmail.com', 'Gaia demande de devis');

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
