<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileTNController extends Controller
{
    public function index()
    {
        return view('general.profileTN');
    }
}
