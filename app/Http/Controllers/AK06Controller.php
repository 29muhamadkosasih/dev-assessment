<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AK06Controller extends Controller
{
    public function create()
    {
        return view('pages.perangkat_assessment.fr_ak_06.create', [
            ''
        ]);
    }
}