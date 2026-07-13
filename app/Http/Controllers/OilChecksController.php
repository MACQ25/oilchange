<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOilChangeCheckRequest;
use App\Models\OilChange;

class OilChecksController extends Controller {


    public function show($id) {
        $oilChange = OilChange::findOrFail($id);

        return view('result', ['oilChange' => $oilChange]);
    }


    public function store(StoreOilChangeCheckRequest $request) {
        $validated = $request->validated();
        
        $oilCheck = OilChange::create([
            ...$validated
        ]);

        return redirect()->route('oil-changes.show', ['id' => $oilCheck->id]);
    }

}