<?php

class MainController extends BaseController
{
    public function showHome ()
    {
        $pageName = 'HOME';
        return View::make('main.home', ['pageName' => $pageName]);
    }

    public function showArticles ()
    {
        $pageName = 'ARTICLES';
        $articles = Articles::getAllArticles();
        return View::make('main.articles', ['articles' => $articles, 'pageName' => $pageName]);
    }

    public function showArticle ($id)
    {
        $article = Articles::getOneArticle($id);
        return View::make('main.article', ['article' => $article]);
    }

    public function showAbout ()
    {
        $pageName = 'ABOUT';
        return View::make('main.about', ['pageName' => $pageName]);
    }

    public function showContact ()
    {
        $pageName = 'CONTACT US';
        return View::make('main.contact', ['pageName' => $pageName]);
    }

    public function contactForm ()
    {
        if (Request::isMethod('post'))
        {
             Input::flash();

             $data = Input::all();
             $rules = [
                 'name' => 'required',
                 'message' => 'required'
             ];

             $validator = Validator::make($data, $rules);

             if ($validator->passes())
             {
                 return Redirect::to('thank-you')->with('name', $data['name']);
             }
             else
             {
                 return Redirect::to('contact-us')->withErrors($validator)->withInput();;
             }
        }
        else
        {
            throw new Exception('HTTP method should be POST');
        }
    }

    public function successForm ()
    {
        $pageName = 'SUCCESS';
        return View::make('main.success', ['pageName' => $pageName]);
    }

}
