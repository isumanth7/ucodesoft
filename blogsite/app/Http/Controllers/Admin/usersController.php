<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class usersController extends Controller
{
    public function __construct()
    {
      $this->middleware('checkAge');
    }
    public function listUsers()
    {
      return "List Of Users Under Admin Controller";
    }
}
