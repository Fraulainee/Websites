<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $title = 'MyWebsite';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $data = array (
            'title' => 'About Myself',
            'records' => ['Elaine Miral', '09971280322', 'Ma. Cristina, Iligan City']
        );
        return view('pages.about')->with($data);
    }

    // public function comment(){
    //     return view('pages.comment');
    // }
}
