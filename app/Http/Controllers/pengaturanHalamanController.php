<?php

namespace App\Http\Controllers;

use App\Models\halaman;
use App\Models\metadata;
use Illuminate\Http\Request;

class pengaturanHalamanController extends Controller
{
    function index() {
        $datahalaman = halaman::orderBy('judul', 'asc')->get();
        return view("dashboard.pengaturanhalaman.index")->with('datahalaman', $datahalaman);
    }

    function update(Request $request) {
        metadata::updateOrCreate(['meta_key'=>'_halaman_about'],['meta_value' => $request->_halaman_about]);
        metadata::updateOrCreate(['meta_key'=>'_halaman_interest'],['meta_value' => $request->_halaman_interest]);
        metadata::updateOrCreate(['meta_key'=>'_halaman_award'],['meta_value' => $request->_halaman_award]);
        metadata::updateOrCreate(['meta_key'=>'_service_1'],['meta_value' => $request->_service_1]);
        metadata::updateOrCreate(['meta_key'=>'_service_2'],['meta_value' => $request->_service_2]);
        metadata::updateOrCreate(['meta_key'=>'_service_3'],['meta_value' => $request->_service_3]);
        metadata::updateOrCreate(['meta_key'=>'_step_1'],['meta_value' => $request->_step_1]);
        metadata::updateOrCreate(['meta_key'=>'_step_2'],['meta_value' => $request->_step_2]);
        metadata::updateOrCreate(['meta_key'=>'_step_3'],['meta_value' => $request->_step_3]);
        metadata::updateOrCreate(['meta_key'=>'_step_4'],['meta_value' => $request->_step_4]);
        metadata::updateOrCreate(['meta_key'=>'_step_5'],['meta_value' => $request->_step_5]);
        metadata::updateOrCreate(['meta_key'=>'_step_6'],['meta_value' => $request->_step_6]);

        return redirect()->route('pengaturanhalaman.index')->with('success', 'Update Page Setting Successfully!');
    }
}
