<?php

namespace Website\Controller;

use App;
use View;
use Input;
use Response;
use Paginator;
use Controller;

class PageController extends Controller
{
    /**
     * Show the about me page.
     */
    public function showAbout()
    {
        $data['title'] = 'About me';
        return View::make('about', $data);
    }

    /**
     * Show a 404 page.
     */
    public function showFour()
    {
        $data['title'] = '404 Page Not Found';
        return View::make('404', $data);
    }


}