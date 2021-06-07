<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends FrontendController
{
    public function index()
    {
        $this->data('x', 10);
        $this->data('y', 20);
        return view($this->pagePath . '.Home.home', $this->data);
    }

    public function contact()
    {
        return view($this->pagePath . 'contact.contact');
    }
}
