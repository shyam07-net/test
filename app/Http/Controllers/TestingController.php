<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testing;

class TestingController extends Controller
{
    public function create()
    {
        $data = new testing;
        $data->name = "shyam";
        $data->time = "time";
        $data->save();
    }
}
