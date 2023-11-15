<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view("pages.index");
    }

    public function websiteDetail(){
        $pagetitle="Get Professional Website";
        return view("pages.website.detail",[
            'pagetitle'=>$pagetitle,
        ]);
    }

    public function emailDetail(){
    $pagetitle="Get Professional Email";
    return view("pages.website.email_detail",[
        'pagetitle'=>$pagetitle,
    ]);
    }
}
