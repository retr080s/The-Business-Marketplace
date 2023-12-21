<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketController extends Controller
{
    // Index page
    public function index() {
        return view('index');
    }

    // Login page
    public function login() {
        return view('login');
    }

    // Register page
    public function register() {
        return view('register');
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
        return view('add-listing');
    }
}
