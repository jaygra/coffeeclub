<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembersController extends Controller
{
    @showMembers() {
        $drinkers = [
            'Søren Kierkegaard',
            'Honore de Balzac',
            'Theodore Roosevelt',
            'Voltaire',
            'Ludvig van Beethoven',
            'Johann Sebastian Bach'
        ];
        return view('contents/home', compact('drinkers') );

    }
        
}
