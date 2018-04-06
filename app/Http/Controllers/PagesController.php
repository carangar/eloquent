<?php

namespace ORM\Http\Controllers;
use ORM\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public  function home(){
    	$title="Ultimos usuarios Registrados";
    	$users=User::orderBy('id','DESC')
    				->take(23)
    				->get();
    	return view('pages.home', compact('users','title'));
    }
    public function all(){
    	return User::all();}
	}
