<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;

class LogController
{
    public function index()
    {
        $logs = Log::all();
        return view('admin.logs.index', compact('logs'));
    }
}
