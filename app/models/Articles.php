<?php

/**
 * Created by PhpStorm.
 * User: leo
 * Date: 15.08.17
 * Time: 12:03
 */
class Articles
{
    private static $articles = [
        1 =>  [
            'title' => 'ARTICLE 1',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.'],
        2 =>  [
            'title' => 'ARTICLE 2',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.'],
        3 =>  [
            'title' => 'ARTICLE 3',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.'],
        4 =>  [
            'title' => 'ARTICLE 4',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.'],
        5 =>  [
            'title' => 'ARTICLE 5',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.'],
        6 =>  [
            'title' => 'ARTICLE 6',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.'],
        7 =>  [
            'title' => 'ARTICLE 7',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.'],
        8 =>  [
            'title' => 'ARTICLE 8',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.'],
        9 =>  [
            'title' => 'ARTICLE 9',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.'],
        10 =>  [
            'title' => 'ARTICLE 10',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.'],
  
    ];

    public static function getAllArticles ()
    {
        return self::$articles;
    }

    public static function getOneArticle ($id)
    {
        return self::$articles[$id];
    }

}