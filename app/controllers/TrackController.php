<?php

class TrackController extends BaseController
{
    public function showTrack ($id)
    {
        $track     = Track::find($id);
        $genre     = $track->getGenre()->first();
        $album     = $track->getAlbum()->first();
        $mediaType = $track->getMediaType()->first();

        $pageName      = $track->Name;
        $albumName     = $album->Title;
        $artistName    = $track->getArtist($album->ArtistId);
        $genreName     = $genre->Name;
        $mediaTypeName = $mediaType->Name;

        return View::make('track.track', [
                'pageName'      => $pageName,
                'track'         => $track,
                'albumName'     => $albumName,
                'artistName'    => $artistName,
                'genreName'     => $genreName,
                'mediaTypeName' => $mediaTypeName
        ]);
    }

  
}
