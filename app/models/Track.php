<?php

/**
 * Created by PhpStorm.
 * User: leo
 * Date: 17.08.17
 * Time: 10:17
 */
class Track extends Eloquent
{
    protected $table = 'Track';
    protected $primaryKey = 'TrackId';

    public function getGenre ()
    {
        return $this->hasOne('Genre', 'GenreId', 'GenreId');
    }

    public function getAlbum ()
    {
        return $this->hasOne('Album', 'AlbumId', 'AlbumId');
    }

    public function getMediaType ()
    {
        return $this->hasOne('MediaType', 'MediaTypeId', 'MediaTypeId');
    }

    public function getArtist ($id)
    {
        return DB::table('Artist')->where('ArtistId', $id)->pluck('Name');
    }
}