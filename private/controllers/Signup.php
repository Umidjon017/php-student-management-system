<?php

/*
 * Signup controller
 */
class Signup extends Controller
{
    public function index()
    {
        $this->view('auth/signup');
    }
}