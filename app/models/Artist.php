<?php

/**
 * Created by PhpStorm.
 * User: leo
 * Date: 15.08.17
 * Time: 12:03
 */
class Artist extends Eloquent 
{
     protected $table = 'Artist';
     protected $primaryKey = 'ArtistId';

     public function getAlbums ()
     {
          return $this->hasMany('Album', 'ArtistId', 'ArtistId');
     }
}


