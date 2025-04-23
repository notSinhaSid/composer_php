<?php

class Home extends Controller
{
    public function index()
    {
        echo "This is the home controller within the app<br>";

        $this->view('home');
    }
}
