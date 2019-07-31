<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\cr;
=======
>>>>>>> 475aa789a66f4b546a1ea6f91672658dc27758bf
use Illuminate\Http\Request;

class PagesController extends Controller
{
<<<<<<< HEAD
    
=======
>>>>>>> 475aa789a66f4b546a1ea6f91672658dc27758bf
    public function index() {
        $headline = array(
            'headline' => "BD Model Test",
            'slogan' => "A handy tool to test your skills",
        );
<<<<<<< HEAD
        
=======
       
>>>>>>> 475aa789a66f4b546a1ea6f91672658dc27758bf
        return view('pages.index')->with( $headline);
    }
    public function division() {
        $headline = array(
            'headline' => "BD Model Test",
            'slogan' => "A handy tool to test your skills",
        );
        
        return view('pages.division')->with($headline);
    }
    public function district() {
        $headline = array(
            'headline' => "BD Model Test",
            'slogan' => "A handy tool to test your skills",
        );
        return view('pages.district')->with($headline);
    }
    public function upozilla() {
        $headline = array(
            'headline' => "BD Model Test",
            'slogan' => "A handy tool to test your skills",
        );
        return view('pages.upozilla')->with( $headline );
    }
    public function union() {
        $headline = array(
            'headline' => "BD Model Test",
            'slogan' => "A handy tool to test your skills",
        );
        return view('pages.union')->with( $headline );
    }
    public function blogs() {
        $headline = array(
            'headline' => "BD Model Test",
            'slogan' => "A handy tool to test your skills",
        );
        return view('pages.blogs')->with($headline);
    }
    public function contact_us() {
        $headline = array(
            'headline' => "BD Model Test",
            'slogan' => "A handy tool to test your skills",
        );
        return view('pages.contact_us')->with($headline);
    }
    // public function services() {
    //     $headline = "Services || BD Model Test";
    //     return view('pages.services')->with(
    //         'headline', $headline
    //     );
    // }
<<<<<<< HEAD
    
=======
>>>>>>> 475aa789a66f4b546a1ea6f91672658dc27758bf
}
