<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class HomeController extends Controller
{
    function add(Request $req)
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
            "languages[]" => 'required',
            "family" => 'required'
        ]);
        $app = new Application();
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
        $app->family = $req->family;
        $app->save();
        return redirect("/");
    }
}
