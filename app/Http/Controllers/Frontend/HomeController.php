<?php

namespace App\Http\Controllers\Frontend;


use App\Models\About;
use App\Models\Service;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Achievement;
use App\Models\Commune;
use Illuminate\Support\Facades\Mail;;

use App\Models\Job;
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
