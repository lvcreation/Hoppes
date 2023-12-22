<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{droit,duree,ecolage,etudiant,formateur,formation,vague,Decolage,testimonial,evenement, extrait,User, finance};
use Carbon\carbon;
use App\Speed;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function chart()
    {
      $data=User::select('id','created_at')->get()->groupBy(function($data){
        return carbon::parse($data->created_at)->format('M');
      });
      $months=[];
      $monthCount=[];
      foreach ($data as $month => $values) {
        $months[]=$month;
        $monthCount[]=count($values);
      }
     
      return view('chart',['data'=>$data, 'months'=>$months,'monthCount'=>$monthCount],compact('onlineUsers'));

    }

    // public function onlineUsersCount()
    // {
    //     $onlineUsers = DB::table('sessions')
    //         ->where('last_activity', '>=', now()->subMinutes(5))
    //         ->count();

    //     return $onlineUsers;
    // }
    public function chartDonut()
    {
        Speed::create(['speed' => rand(30,70)]);

        $speeds = Speed::latest()->take(30)->get()->sortBy('id');
        $labels = $speeds->pluck('id');
        $data = $speeds->pluck('speed');

        return response()->json(compact('labels', 'data'));
    }
  
}