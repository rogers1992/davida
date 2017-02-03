<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PacienteController extends Controller
{
    public function index(){
      return view('pacientes.index');
    }
    public function create(){
      return view('pacientes.create');
    }
    public function show(){
      return view('pacientes.show');
    }
}
