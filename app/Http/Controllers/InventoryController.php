<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function create() {
        return view('inventories.create');
    }

    public function store (Request $request){
        dd ($request);


    }
}
