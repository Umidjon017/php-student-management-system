<?php

/*
 * Login controller
 */
class Login extends Controller
{
    public function index()
    {
        $this->view('auth/login');
    }
}