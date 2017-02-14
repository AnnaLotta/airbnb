<?php namespace Halo;

class welcome extends Controller
{
    function index()
    {
        $this->welcome = get_all("SELECT * FROM welcome");
    }
}

