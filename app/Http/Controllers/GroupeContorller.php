<?php

namespace App\Http\Controllers;

use App\Groupe;
use Illuminate\Http\Request;

class GroupeContorller extends Controller
{
    public function show(Groupe $groupe)
    {
        dd($groupe->topics);      // with hasManyThrough w accede directly to topics bettre than dd($groupe->users()->first()->topics)
//      dd($groupe->topics->first()->title);
        return view('groupe.index');
    }
}
