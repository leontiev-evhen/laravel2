<?php

class AlbumController extends BaseController
{
    public function showAlbum ($id)
    {
        $album  = Album::find($id);
        $tracks = $album->getTracks()->get();
        $artist = $album->getArtist()->first();

        $pageName    = $album->Title;
        $albumArtist = $artist->Name;

        return View::make('album.album', [
            'pageName'    => $pageName,
            'tracks'      => $tracks,
            'albumArtist' => $albumArtist
        ]);
    }

}
