<?php

namespace App\Http\Controllers;

use App\Models\AnswerAPL02;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class AK04Controller extends Controller
{
    public function index()
    {
        $apl_02 = AnswerAPL02::all();

        return view('pages.perangkat_assessment.fr_ak_04.index', [
            'apl_02'   => $apl_02
        ]);
    }

    public function show($id)
    {
        $show = AnswerAPL02::find($id);

        return view('pages.perangkat_assessment.fr_ak_04.create', [
            'show'  => $show
        ]);
    }
}