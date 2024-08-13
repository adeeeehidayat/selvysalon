<?php

namespace App\Controllers;

class Team extends BaseController
{
    public function index(): string
    {
        return view('team');
    }
}
