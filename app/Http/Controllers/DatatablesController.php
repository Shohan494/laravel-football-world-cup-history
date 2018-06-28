<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\User;

class DatatablesController extends Controller
{
    public function index()
    {
        return DataTables::of(User::query())->make(true);
    }

    public function create()
    {
        return view('datatables.data');
    }
}
