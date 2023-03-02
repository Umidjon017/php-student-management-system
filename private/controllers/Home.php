<?php

/*
 * Home controller
 */
class Home extends Controller
{
    public function index()
    {
        $control = [
            'name' => 'Umidjon',
            'age' => 22,
        ];
        $this->view('home', ['control' => $control]);
    }
}