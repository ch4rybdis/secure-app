<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\RoleMiddleware;

class AdminController extends \Illuminate\Routing\Controller
{
    public function __construct()
    {
        $this->middleware('role:admin');

    }

    public function index()
    {
        return view('admin.index');
    }}
