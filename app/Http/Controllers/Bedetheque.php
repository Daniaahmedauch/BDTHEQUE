<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Bedetheque extends Controller
{
       
   public function getBedetheque()
   {
       

       $liste_bd= DB::select('SELECT * FROM liste_bd WHERE id ORDER BY nom_bd' );


       return view('bdtheque', 
       [
           'liste_bd' => $liste_bd,
   
       ]); 
   }
}

