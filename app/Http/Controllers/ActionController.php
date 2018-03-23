<?php

namespace App\Http\Controllers;

use \App\Disk as Disk;
use Illuminate\Http\Request;


class ActionController extends Controller
{
    public function addDisk(Request $request)
    {
        $disk = new Disk();
        $disk->name = $request->input('name');
        $disk->author = $request->input('author');
        $disk->year = $request->input('year');
        $disk->genre = $request->input('genre');
        $disk->stock = $request->input('stock');
        $disk->support = $request->input('support');
        $disk->save();
        return redirect ('/disksList');
    }

    public function updateDisk(Request $request)
    {
        $disk = Disk::findOrFail($request->input('id'));
        $disk->name = $request->input('name');
        $disk->author = $request->input('author');
        $disk->year = $request->input('year');
        $disk->genre = $request->input('genre');
        $disk->stock = $request->input('stock');
        $disk->support = $request->input('support');
        $disk->save();
        return redirect('/disksList');
    }

    public function deleteDisk(Request $request)
    {
        Disk::destroy($request->input('id'));
        return redirect('/disksList');
    }
    

}