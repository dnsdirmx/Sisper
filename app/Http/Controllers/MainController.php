<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dominio;

class MainController extends Controller
{
	public function index()
	{
		$dominios = Dominio::all();
//		return view('login',['dominios' => $dominios]);
		return view('inicio');
	}
}
