<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $repository;

    public function __construct()
    {
        $this->repository = 'administration';
        $this->middleware('auth');
        $this->nav = view($this->repository.'.navbar');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->nav.view($this->repository.'.home');
    }

    public function charts()
    {
        return $this->nav.view($this->repository.'.charts');
    }

    public function tables()
    {
        return $this->nav.view($this->repository.'.table');
    }

    public function components()
    {
        return $this->nav.view($this->repository.'.components');
    }
}
