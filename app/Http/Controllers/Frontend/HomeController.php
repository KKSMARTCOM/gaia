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
use Illuminate\Support\Facades\Mail;
use App\Models\ContactSectionSetting;
use App\Models\FeedbackSectionSetting;
use App\Models\PortfolioSectionSetting;

class HomeController extends Controller
{
    public function index()
    {

        return view('frontend.pages.home');
    }


    public function showPortfolio($id)
    {
        return view('frontend.pages.portfolio-details');
    }

    public function showBlog($id)
    {

        return view('frontend.pages.blog-details');
    }

    public function blog()
    {

        return view('frontend.pages.blog');
    }

    public function portfolio()
    {

        return view('frontend.pages.portfolio');
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

        return response(['status' => 'success', 'message' => 'Mail Sended Successfully!']);
    }
}
