<?php

namespace App\Http\Controllers;

use App\Support\View;

class WelcomeController
{
    public function index(View $view)
    {
        $name = 'Clean Code Studio';

        $qb = query_builder();

        // HYDRAHON
        // https://clancats.io/hydrahon/master/

        $people = $qb->table('home_data');
        $res = $people->select()->execute()[0];
        
        return $view('user.home', $res);
        // return $view('user.home', compact('name'));
    }

    public function show(View $view, $name, $id)
    {
        return $view('user.show', compact('name', 'id'));
    }
}