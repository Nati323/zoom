<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class AppBaseController extends Controller
{
    protected $request;

    public function __construnct(Request $request)
    {
        $this->request = $request;
    }

    public function showPage($pageName, $pageData)
    {
        return \view("app.$pageName", $pageData);
    }
}
