<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class AK04Controller extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('fr_ak_04.create'), Response::HTTP_FORBIDDEN, 'Forbidden');

        dd(['hello word']);
    }

    public function create()
    {
        return view('pages.perangkat_assessment.fr_ak_04.create', [
            ''
        ]);
    }
}