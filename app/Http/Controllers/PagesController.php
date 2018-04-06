<?php

namespace ORM\Http\Controllers;
use ORM\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public  function home(){
    	return view('pages.home');
    }
    public function all(){
    	return User::all();}
	}
