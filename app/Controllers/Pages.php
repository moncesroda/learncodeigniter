<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | WebProgrammingMONCES'
        ];

        return view('home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About Us'
        ];

        return view('about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us'
        ];
        return view('contact', $data);
    }

    //--------------------------------------------------------------------

}
