<?php

namespace App\Controllers;

class Pricelist extends BaseController
{
    public function index(): string
    {
        return view('pricelist');
    }
}
