<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Dela Farahita Zain - 2241720058';
    }

    public function articles($articlesId){
        return 'Halaman Artikel dengan Id '.$articlesId;
    }

}
