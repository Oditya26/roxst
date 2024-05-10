<?php

namespace App\Http\Controllers;

use App\Models\halaman;
use App\Models\riwayat;
use Illuminate\Http\Request;

class depanController extends Controller
{
    public function index() {
        $about_id = get_meta_value('_halaman_about');
        $about_data = halaman::where('id', $about_id)->first();

        $interest_id = get_meta_value('_halaman_interest');
        $interest_data = halaman::where('id', $interest_id)->first();

        $award_id = get_meta_value('_halaman_award');
        $award_data = halaman::where('id', $award_id)->first();

        $service_1_id = get_meta_value('_service_1');
        $service_1_data = halaman::where('id', $service_1_id)->first();

        $service_2_id = get_meta_value('_service_2');
        $service_2_data = halaman::where('id', $service_2_id)->first();

        $service_3_id = get_meta_value('_service_3');
        $service_3_data = halaman::where('id', $service_3_id)->first();

        $step_1_id = get_meta_value('_step_1');
        $step_1_data = halaman::where('id', $step_1_id)->first();

        $step_2_id = get_meta_value('_step_2');
        $step_2_data = halaman::where('id', $step_2_id)->first();

        $step_3_id = get_meta_value('_step_3');
        $step_3_data = halaman::where('id', $step_3_id)->first();

        $step_4_id = get_meta_value('_step_4');
        $step_4_data = halaman::where('id', $step_4_id)->first();

        $step_5_id = get_meta_value('_step_5');
        $step_5_data = halaman::where('id', $step_5_id)->first();

        $step_6_id = get_meta_value('_step_6');
        $step_6_data = halaman::where('id', $step_6_id)->first();

        $experience_data = riwayat::where('tipe', 'experience')->get();

        $education_data = riwayat::where('tipe', 'education')->get();
        
        return view('roxst.index')->with([
            'about' => $about_data,
            'service_1' =>  $service_1_data,
            'service_2' =>  $service_2_data,
            'service_3' =>  $service_3_data,
            'step_1' => $step_1_data,
            'step_2' => $step_2_data,
            'step_3' => $step_3_data,
            'step_4' => $step_4_data,
            'step_5' => $step_5_data,
            'step_6' => $step_6_data,
            'interest' => $interest_data,
            'award' => $award_data,
            'experience' => $experience_data,
            'education' => $education_data,
        ]);
    }
}
