<?php

namespace Mahmudz\VueForm\Http\Controllers;

use Illuminate\View\View;

class HomeController
{
    /**
     * Returns the Vapor UI home page.
     *
     * @return View
     */
    public function __invoke()
    {
        return view('vue-form::layout');
    }
}