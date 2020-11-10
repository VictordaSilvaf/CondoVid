<?php

namespace App\Http\Controllers;

use App\Models\CondoVid;
use Illuminate\Http\Request;

class APICondoVidController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(CondoVid::all());
    }
}
