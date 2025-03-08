<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $kelas = Kelas::limit(3)->get();
        return view('welcome', compact('kelas'));
    }

    public function show($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.detail', compact('kelas'));
    }

}
