<?php

class GenreController extends BaseController
{
    public function showHome ()
    {
        $pageName = 'Genre';
        
        return View::make('artist.home', [
            'pageName' => $pageName
        ]);
    }

   }
