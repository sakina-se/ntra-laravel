<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Branch;

class AdController
{
    public function getAds(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return  view('home', ['ads' => Ad::all(), 'branches' => Branch::all()]);
    }
    public function index(){

    }
}
