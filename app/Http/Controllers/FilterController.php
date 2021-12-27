<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FilterController extends Controller
{
    //
    public function women_filter(Request $request){

        return view('filters.women_filter');
    }

    public function men_filter(Request $request){

        return view('filters.men_filter');
    }

    public function baby_filter(Request $request){

        return view('filters.baby_filter');
    }


    public function boy_filter(Request $request){

        return view('filters.boy_filter');
    }


    public function girl_filter(Request $request){

        return view('filters.girl_filter');
    }

    // women section 

    public function women_dress_length(Request $request){

        return view('filters.women_dress_length');
    }


    public function women_sleeve_type(Request $request){

        return view('filters.women_sleeve_type');
    }

    public function women_slevees_length(Request $request)
    {
        return view ('filters.women_slevees_length');
    }

    public function women_features(Request $request)
    {
        return view ('filters.women_features');
    }
    public function women_necklines(Request $request)
    {
        return view ('filters.women_necklines');
    }
    public function women_materials(Request $request)
    {
        return view ('filters.women_materials');
    }
    public function women_patterns(Request $request)
    {
        return view ('filters.women_patterns');
    }
    public function women_dress_style(Request $request)
    {
        return view ('filters.women_dress_style');
    }
    public function women_embellishments(Request $request)
    {
        return view ('filters.women_embellishments');
    }
    public function women_occasions(Request $request)
    {
        return view ('filters.women_occasions');
    }



    // girl section 

    public function girl_dress_length(Request $request){

        return view('filters.girl_dress_length');
    }

    public function girl_sleeve_type(Request $request){

        return view('filters.girl_sleeve_type');
    }


    public function all_filters(Request $request){

        return view('filters.all_filters');
    }

}
