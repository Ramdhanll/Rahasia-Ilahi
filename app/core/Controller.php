<?php

class Controller
{
    public function view($view, $data = [])
    {
        require '../app/views/' . $view . '.php';
    }

    public function model($model)
    {
        require '../app/models/' . $model . '.php';
        return new $model;
    }
}
