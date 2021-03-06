<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $active = '';
        return view('home', compact('active'));
    }

    public function profile()
    {
        $active = 'profile';
        return view('pages.profile', compact('active'));
    }

    public function social()
    {
        $active = 'social';
        return view('pages.social', compact('active'));
    }

    public function skills()
    {
        $active = 'skills';
        return view('pages.skills', compact('active'));
    }

    public function achievement()
    {
        $active = 'achievement';
        return view('pages.achievement', compact('active'));
    }

    public function educations()
    {
        $active = 'educations';
        return view('pages.educations', compact('active'));
    }

    public function experiences()
    {
        $active = 'experiences';
        return view('pages.experiences', compact('active'));
    }

    public function portofolio()
    {
        $active = 'portofolio';
        return view('pages.portofolio', compact('active'));
    }
}
