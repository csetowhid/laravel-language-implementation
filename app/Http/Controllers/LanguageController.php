<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index(Request $request,  $locale)
    {
        App::setLocale($locale);
        $request->session()->put('locale', $locale);
        return redirect()->back();
    }
}
