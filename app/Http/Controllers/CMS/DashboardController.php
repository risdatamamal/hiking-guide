<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.cms.index');
    }

    public function clearCache()
    {
        \Artisan::call('cache:clear');
        return view('pages.cms.clear-cache');
    }
}
