<?php

namespace App\Modules\DummyName\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\DummyName\Models\DummyName;

class IndexController extends Controller
{
    public function getModel()
    {
        return new DummyName;
    }
}