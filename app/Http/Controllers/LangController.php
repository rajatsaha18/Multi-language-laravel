<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Session;


class LangController extends Controller
{
    public function lang()
    {
        return view('lang');
    }

    public function lang_change(Request $request)
    {
        App::setLocale($request->lang);
        //session: temporary data store system , put('key', 'value') help stor data in session
        session::put('lang_code', $request->lang);
        return redirect()->back(); // return the action back in this page

    }

}
