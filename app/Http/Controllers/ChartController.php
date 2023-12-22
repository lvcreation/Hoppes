<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;


class ChartController extends Controller
{
    public function chartDonut()
    {
        $onlineUsers = DB::table('users')
        ->where('last_activity', '>=', now()->subMinutes(1))
        ->count();
        $data = [
            'labels' => ['nbr prs actif'],
            'data' => [$onlineUsers],
        ];

        return view('chartDonut', compact('data','onlineUsers'));
    }

    // public function chartDonut()
    // {
    //     $data = $this->getDataForLineChart();

    //     return view('chartDonut', compact('data'));
    // }

    // private function getDataForLineChart()
    // {
    //     $labels = [];
    //     $data = [];

    //     // Récupérer les données pour chaque seconde
    //     for ($i = 5; $i >= 0; $i--) {  // Par exemple, sur les 5 dernières secondes
    //         $currentTime = Carbon::now()->subSeconds($i);
    //         $userCount = User::where('last_activity', '>=', $currentTime)->count();
            
    //         $labels[] = $currentTime->format('H:i:s');
    //         $data[] = $userCount;
    //     }

    //     return [
    //         'labels' => $labels,
    //         'data' => $data,
    //     ];
    // }
}

