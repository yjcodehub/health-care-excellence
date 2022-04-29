<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class HomeController extends Controller
{
    function home()
    {
        return view("index");
    }

    function saveApplication(Request $req)
    { 
        $req->validate([
            "fname" => 'required',
            "lname" => 'required',
            "addLine1" => 'required',
            "city" => 'required',
            "state" => 'required',
            "zipCode" => 'required',
            "email" => 'required',
            "tel" => 'required',
            "community" => 'required',
            "languages" => 'required',
            "language_other" => 'required',
            "family" => 'required',
            "same_household" => 'required',
        ]);

        $app = new Application();
        $app->lang = $req->lang;
        $app->firstName = $req->fname;
        $app->lastName = $req->lname;
        $app->addLine1 = $req->addLine1;
        $app->addLine2 = $req->addLine2;
        $app->city = $req->city;
        $app->state = $req->state;
        $app->zipCode = $req->zipCode;
        $app->email = $req->email;
        $app->tel = $req->tel;
        $app->textOk = $req->textOk;
        $app->community = $req->community;
        $chrStr = implode(", ", $req->languages);
        $app->languages = $chrStr;
        $app->language_other = $req->language_other;
        $app->family = $req->family;
        $app->same_household = $req->same_household;
        $app->save();
        return redirect("/");
    }
}
