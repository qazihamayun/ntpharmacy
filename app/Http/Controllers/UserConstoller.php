<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserConstoller
 *
 * @author qazihamayun
 */
namespace App\Http\Controllers;

class UserConstoller extends Controller{
    
    //put your code here
    
    public function dashboard(){
        return view('user.dashboard');
    }
    
    
}
