<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Groups;
use Illuminate\Http\Request;

class ShowGroupController extends Controller
{
    public function index () {
        $groups = Groups::all();
        
        return view('dashboard.show-groups', compact('groups'));
    }

    public function showGroup ($id) {
        $group = Groups::find($id);
        $group_integrants = Clients::where('id_group', $id)->get();

        return view('dashboard.group', compact('group', 'group_integrants'));
    }
}
