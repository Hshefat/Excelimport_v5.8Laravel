<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Excel;

class UserController extends Controller
{

    public function index()
    {
        return view('excel');
    }





   public function exportUser()
   {
      return Excel::download(new UsersExport,'users.xlsx');
   }
}
