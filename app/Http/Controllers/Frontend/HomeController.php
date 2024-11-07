<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\Hero;
use App\Models\About;
use App\Models\Service;
use App\Models\Category;
use App\Models\Feedback;
use App\Mail\ContactMail;
use App\Models\SkillItem;
use App\Models\Experience;
use App\Models\TyperTitle;
use Illuminate\Http\Request;
use App\Models\PortfolioItem;
use App\Models\BlogSectionSetting;
use App\Models\SkillSectionSetting;
use App\Http\Controllers\Controller;
use App\Models\Achievement;
use App\Models\Banner;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactSectionSetting;
use App\Models\FeedbackSectionSetting;
use App\Models\Job;
use App\Models\PortfolioSectionSetting;

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
            'name' => ['required', 'max:200'],
            'subject' => ['required', 'max:300'],
            'email' => ['required', 'email'],
            'message' => ['required', 'max:2000'],
        ]);

        Mail::send(new ContactMail($request->all()));

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

    public function essai(Request $request)
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

        return view('frontend.pages.essai', compact('services', 'remaining'));
    }
}
