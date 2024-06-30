<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\RoleMiddleware;
class UserController extends \Illuminate\Routing\Controller
{
    public function __construct()
    {

        $this->middleware('role:user');

    }

    public function index()
    {

        return view('user.index');
    }}
