<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cvinfo;

class CvinfoController extends Controller
{
      public function getInfos(){
    	$infos = Cvinfo::all();
		return view('welcome', ['infos'=>$infos]);
    }
     public function getFormation(){
    	$infos = Cvinfo::all();
		return view('formation.formation', ['infos'=>$infos]);
    }
     public function getCompetence(){
    	$infos = Cvinfo::all();
		return view('competence.competence', ['infos'=>$infos]);
    }
     public function getLoisir(){
    	$infos = Cvinfo::all();
		return view('loisir.loisir', ['infos'=>$infos]);
    }
     public function getExperience(){
    	$infos = Cvinfo::all();
		return view('experience.experience', ['infos'=>$infos]);
    }
     public function getContact(){
    	$infos = Cvinfo::all();
		return view('contact.contact', ['infos'=>$infos]);
    }
     
}
