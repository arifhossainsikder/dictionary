<?php

namespace App\Http\Controllers;

use App\Word;
use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function index()
	{
		$words = Word::count();
		return view('admin/index', compact('words'));
	}
}
