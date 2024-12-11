<?php

namespace App\Http\Controllers\Frontend;


use App\Models\About;
use App\Models\Service;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Achievement;
use App\Models\Commune;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

use App\Models\Job;
use App\Models\Partner;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $limit = 3;
        $offset = $request->input('offset', 0);

        // Récupère les services avec une pagination personnalisée
        $services = Service::skip($offset)->take($limit)->get();

        // Vérifie s'il reste d'autres services à charger
        $remaining = Service::count() > ($offset + $limit);

        if ($request->ajax()) {
            return response()->json([
                'service' => view('frontend.ajax.serviceList', compact('services'))->render(),
                'remaining' => $remaining
            ]);
        }

        $about = About::first();

        $achievements = Achievement::inRandomOrder()->limit(2)->get();

        return view('frontend.pages.home', compact('about', 'achievements', 'services', 'remaining'));
    }

    public function contact(Request $request)
    {

        $request->validate([
            'lastname' => 'required|string|min:2',
            'firstname' => 'required|string|min:2',
            'email' => 'required|email',
            'message' => 'required|string'
        ], [
            'lastname.required' => 'Vous devez obligatoirement remplir le champ Nom',
            'firstname.required' => 'Vous devez obligatoirement remplir le champ Prénom',
            'email.required' => 'Vous devez obligatoirement remplir le champ Email',
            'email.email' => 'Vous devez entrez un mail valide',
            'message.required' => 'Vous devez obligatoirement remplir le champ Message'
        ]);

        $mailData = [
            'lastname' => Str::title($request->lastname),
            'firstname' => Str::title($request->firstname),
            'email' => $request->email,
            'message' => $request->message,
            'ip' => $request->ip(),
        ];

        Mail::send(new ContactMail($mailData));

        return response(['status' => 'success', 'message' => 'Mail envoyé avec succès !']);
    }

    public function about(string $id)
    {
        $about = About::where('id', $id)->firstOrFail();
        return view('frontend.pages.about', compact('about'));
    }

    public function jobs()
    {
        $jobs = Job::all();
        return view('frontend.pages.job', compact('jobs'));
    }

    public function showService($id)
    {
        $service = Service::where('id', $id)->firstOrFail();
        return view('frontend.pages.service-details', compact('service'));
    }

    public function showAchievement(string $id)
    {
        $achievement = Achievement::where('id', $id)->firstOrFail();
        return view('frontend.pages.achievement-details', compact('achievement'));
    }

    public function realisations()
    {
        $achievements = Achievement::all();
        return view('frontend.pages.realisations', compact('achievements'));
    }

    public function showContactForm()
    {
        return view('frontend.pages.contact');
    }

    public function choixcategorie()
    {
        return view('frontend.pages.choixcategorie');
    }

    public function devis()
    {
        return view('frontend.pages.devis');
    }

    public function envoyerDevis(Request $request)
    {
        // Validation des données du formulaire
        $validated = $request->validate(
            [
                'societe' => 'nullable|string',
                'email' => 'required|email',
                'nom' => 'required|string',
                'prenoms' => 'required|string',
                'adresseintervention' => 'required|string',
                'message' => 'required|string',
                'plan_topographique' => 'nullable|file|mimes:pdf,dwg',
                'autre_document' => 'nullable|file|mimes:pdf,dwg', // Nouveau champ
            ],
            [
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
            ]
        );

        $data = [
            'societe' => $validated['societe'],
            'email' => $validated['email'],
            'nom' => $validated['nom'],
            'prenoms' => $validated['prenoms'],
            'adresseintervention' => $validated['adresseintervention'],
            'projetMessage' => $validated['message'],
        ];

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
            $message->to('kksmartcom.bj@gmail.com')
                ->subject('Demande de devis de ' . $validated['nom'])
                ->from($validated['email'], 'Gaia');

            if ($pathPlan) {
                $message->attach(storage_path('app/public/' . $pathPlan));
            }

            if ($pathAutreDocument) {
                $message->attach(storage_path('app/public/' . $pathAutreDocument));
            }
        });

        return redirect()->back()->with('success', 'Votre demande de devis a été envoyée avec succès.');
    }



    public function essai(Request $request, string $id = null)
    {
        $limit = 3;
        $offset = $request->input('offset', 0);

        // Récupère les services avec une pagination personnalisée
        $services = Service::skip($offset)->take($limit)->get();

        // Vérifie s'il reste d'autres services à charger
        $remaining = Service::count() > ($offset + $limit);

        if ($request->ajax()) {
            return response()->json([
                'service' => view('frontend.ajax.serviceList', compact('services'))->render(),
                'remaining' => $remaining
            ]);
        }

        $allServices = Service::with('communes')->get();

        if ($id) {

            $service = Service::findOrFail($id);

            return view('frontend.pages.essai', compact('services', 'allServices', 'remaining', 'service'));
        }

        return view('frontend.pages.essai', compact('services', 'allServices', 'remaining'));
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenoms' => 'required|string|max:255',
            'email' => 'required|email',
            'service_id' => 'required|integer',
            'batiments' => 'required|string',
            'commune' => 'required|integer',
            'plan_topographique' => 'nullable|file|mimes:pdf,dwg',
            'telephone' => 'nullable|string|max:20',
            'adresse' => 'nullable|string|max:255',
        ]);

        // Récupérer le service à partir de la base de données
        $service = DB::table('services')->where('id', $validated['service_id'])->first();

        if (!$service) {
            return redirect()->back()->withErrors(['service_id' => 'Service non trouvé']);
        }

        // Calculer le prix à partir du champ base_price
        $price = $service->base_price; // Utiliser directement la colonne `base_price`

        $filePath = null;
        if ($request->hasFile('plan_topographique')) {
            // Sauvegarder le fichier dans `storage/app/plans`
            $filePath = $request->file('plan_topographique')->store('plans');
        }

        // Insérer les données dans la table
        DB::table('order_tests')->insert([
            'lastname' => $validated['nom'],
            'firstname' => $validated['prenoms'],
            'phone' => $validated['telephone'] ?? null,
            'address' => $validated['adresse'] ?? null,
            'email' => $validated['email'],
            'building_type' => $validated['batiments'],
            'service_id' => $validated['service_id'],
            'commune_id' => $validated['commune'],
            'price' => $price, // Assigner le prix calculé ici
            'topographic_survey' => $filePath,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Demande d\'essai envoyée avec succès !');
    }


    public function getCommunes(string $serviceId)
    {
        try {
            //code...
            $service = Service::where('id', $serviceId)->with('communes')->firstOrFail();

            //dd($service->communes());
            //dd($products);
            return response()->json($service);
        } catch (\Exception $e) {
            //dd($e);
            //throw $th;
            toastr()->error('Une erreur est intervenue au niveau du serveur ! ', $e->getMessage());
        }
    }

    public function showServiceWithPrice(string $serviceId, string $communeId)
    {
        try {
            //code...

            $service = Service::findOrFail($serviceId);

            $communeRelation = $service->communes()->where('commune_id', $communeId)->first();

            // Vérifiez si la relation existe
            if (!$communeRelation) {
                return response()->json(['error' => 'Commune non trouvée pour ce service'], 404);
            }

            $additionalPrice = $communeRelation->pivot->additional_price ?? 0;

            $totalPrice = $service->base_price + $additionalPrice;

            return response()->json($totalPrice);
        } catch (\Exception $e) {
            //dd($e);
            toastr()->error('Une erreur est intervenue au niveau du serveur ! ', $e->getMessage());
            //throw $th;
        }
    }
}
