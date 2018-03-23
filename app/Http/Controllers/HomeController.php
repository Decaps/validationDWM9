<?php

namespace App\Http\Controllers;

use \App\Disk as Disk;
use Illuminate\Http\Request;



class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   $disks = Disk::all();
        return view('home',['disks' => $disks]);
    }

    public function addDisk()
    {
        return view ('addDisk');
    }
    public function disksList()
    {
        $disks = Disk::all();
        return view('disksList',['disks' => $disks]);
    }

    public function updateDisk(Request $request)
    {
        $disks = Disk::find($request->input('id'));
        return view('updateDisk',['disks' => $disks]);
    }

}

