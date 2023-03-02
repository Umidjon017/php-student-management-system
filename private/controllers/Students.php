<?php

/*
 * Students controller
 */
class Students extends Controller
{
    public function index()
    {
        echo 'This is an index of Students controller';
    }

    public function show($id = null)
    {
        echo 'This is show of Students controller '. $id;
    }
}