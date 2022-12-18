<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    
    public function index()
    {
        $home = json_decode(file_get_contents(storage_path() . "/home.json"), true);

        $pageType = $home['pageType'];
        $pageTitle = $home['pageTitle'];
        $metadata = $home['metadata'];
        $header = $home['header'];
        
        $heroes = $home['hero']['values'];//should be able to display these via looping
        $blocks= $home['blocks']['values'];//loops brother
        $content= $home['contentElement'];//nothing here, but maybe provide conditional elements on view?
        $footer = $home['footer'];//null and blank, but here we are, JIC.

        // echo "<pre>";
        // print_r($components);

        return view("HomePage",['home'=>$home,'pageType'=>$pageType,'pageTitle'=>$pageTitle,'metadata'=>$metadata,'header'=>$header,
                                    'heroes'=>$heroes,'blocks'=>$blocks,'content'=>$content,'footer'=>$footer]);
    }
   
}
