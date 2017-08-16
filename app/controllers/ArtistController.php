<?php

class ArtistController extends BaseController
{
    public function showAllArtist ()
    {
        print_r(Artist::find(1));
        $pageName = 'HOME';
        return View::make('main.home', ['pageName' => $pageName]);
    }

   
}
