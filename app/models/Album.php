<?php

/**
 * Created by PhpStorm.
 * User: leo
 * Date: 17.08.17
 * Time: 10:01
 */
class Album extends Eloquent
{
    protected $table = 'Album';
    protected $primaryKey = 'AlbumId';

    public function getTracks ()
    {
        return $this->hasMany('Track', 'AlbumId', 'AlbumId');
    }

    public function getArtist ()
    {
        return $this->hasOne('Artist', 'ArtistId', 'ArtistId');
    }
}