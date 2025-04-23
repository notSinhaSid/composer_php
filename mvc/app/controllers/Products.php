<?php

class Products extends Controller
{
    public function index()
    {
        echo "This is the products controller within the app<br>";

        $this->view('products');
    }
}
