<?php

class ArtistController extends BaseController
{
    public function showAllArtist ()
    {
        $pageName   = 'Artist';
        $artists    = Artist::all();

        return View::make('artist.home', [
            'pageName'  => $pageName,
            'artists'   => $artists
        ]);
    }

    public function showOneArtist ($id)
    {
        $artist = Artist::find($id);
        $albums = $artist->getAlbums()->get();

        $pageName = $artist->Name.' ( ID '.$id. ' )';
      
        return View::make('artist.artist', [
            'pageName'  => $pageName,
            'albums'    => $albums
        ]);
    }

   
}
