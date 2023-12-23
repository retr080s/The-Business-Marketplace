<?php

namespace App\Http\Controllers;

use App\Models\MarketplaceData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MarketController extends Controller
{
    // Index page
    public function index() {
        return view('index', [
            'user' => Auth::user()
        ]);
    }

    // Marketplace page
    public function marketplace() {
        return view('marketplace');
    }

    // Contact page
    public function contact() {
        return view('contact');
    }

    // Team page
    public function team() {
        return view('team');
    }

    // Add listing page
    public function addListing() {
        return view('add-listing', [
            'user' => Auth::user()
        ]);
    }

    // Listings
    public function listings() {

        // $listings = MarketplaceData::where('company', '=', Auth::user())->get();
        $companyListings = MarketplaceData::where('company', Auth::user()->name)->get();

        return view('listings', compact('companyListings'));
    }
}
