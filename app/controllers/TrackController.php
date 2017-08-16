<?php

class TrackController extends BaseController
{
    public function showHome ()
    {
        $pageName = 'HOME';
        return View::make('main.home', ['pageName' => $pageName]);
    }

  
}
