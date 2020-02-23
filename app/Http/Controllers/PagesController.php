<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $messages = [
            [
                'id'=>1,
                'content'=>'este es mi primer mensaje',
                'image'=>'https://i.picsum.photos/id/1/600/338.jpg'
            ],
            [
                'id'=>2,
                'content'=>'este es mi segundo mensaje',
                'image'=>'https://i.picsum.photos/id/2/600/338.jpg'
            ],
            [
                'id'=>3,
                'content'=>'otro mensaje',
                'image'=>'https://i.picsum.photos/id/3/600/338.jpg'
            ],
            [
                'id'=>4,
                'content'=>'este es mi ultimo mensaje',
                'image'=>'https://i.picsum.photos/id/4/600/338.jpg'
            ],
        ];
    return view('welcome',[
            'messages'=>$messages
        ]);
    }

}
