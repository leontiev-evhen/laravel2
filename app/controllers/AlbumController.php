<?php

class AlbumController extends BaseController
{
    public function showAllAlbum ()
    {
        $pageName = 'HOME';
        return View::make('main.home', ['pageName' => $pageName]);
    }


}
