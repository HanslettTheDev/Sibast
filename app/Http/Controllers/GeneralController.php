<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class GeneralController extends Controller
{
    public function home()
    {
        return Inertia::render('Home');
    }

    public function aboutus()
    {
        return Inertia::render('AboutUs');
    }

    public function courses()
    {
        return Inertia::render('Courses');
    }

    public function contact()
    {
        return Inertia::render('Contact');
    }
}
