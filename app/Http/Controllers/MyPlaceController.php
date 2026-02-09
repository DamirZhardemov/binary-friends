<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPlaceController extends Controller
{
    public function index(){
        return 'this is my page';
    }
    public function my_name(){
        return 'My name is Damir';
    }
    public function my_age(){
        return 'Im 21 years old.';
    }
    public function my_sex(){
        return 'Male';
    }
    public function my_city(){
        return 'Kulsary';
    }
}
