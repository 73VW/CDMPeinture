<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevisController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */

    private $directory;
    private $subdirectory;

    private $nav;
    public function __construct()
    {
        $this->directory = 'administration';
        $this->subdirectory = 'devis';
        $this->middleware('auth');
        $this->nav = view($this->directory.'.navbar');
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return $this->nav.view($this->directory.'.'.$this->subdirectory.'.home');
    }
    public function list()
    {
        return $this->nav.view($this->directory.'.'.$this->subdirectory.'.list');
    }
    public function new()
    {
        return $this->nav.view($this->directory.'.'.$this->subdirectory.'.new');
    }
}
