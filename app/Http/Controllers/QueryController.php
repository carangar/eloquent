<?php

namespace ORM\Http\Controllers;

use Illuminate\Http\Request;
use ORM\User;
class QueryController extends Controller
{
    //
        public function getAll(){
    	$users= User::get();
    	$title="Lista de todos los usuarios";
    	return view('query.methods',compact('title','users'));
    	}
    	public function getUser($id){
    		$user=User::find($id);
    		return view('pages.detalles',compact('user'));
    	}
    	public function getByGender($gender){
    		$title="Lista de todos los  usuarios ";
            if($gender=='f'){
                $title= $title.'Femenino';
            }
            else{
                $title=$title.'Masculino';
            }
    		$users=User::where('gender',$gender)->get();
    		return view('query.methods' ,compact('title','users','gender'));
    	}
}
