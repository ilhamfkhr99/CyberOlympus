<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agent;

class AgentController extends Controller
{
    public function index(){
        $agent = Agent::all();
        return view('agent', compact('agent'));
    }
}
