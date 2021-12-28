<?php

namespace App\Http\Controllers;

use App\Post; # REferencia  a la tabla de Post
use Illuminate\Http\Request;

class PageController extends Controller
{
    # Visualizacion de una vista con usuarios

    public function posts()
    {
        return view('posts', [
            'posts' => Post::with('user')->latest()->paginate()
        ]);
    }

    # Vizualizar solo un Post

    public function post(Post $post){ # Argumentos hace referencia a las rutas 
        return view('post', ['post' => $post]);        
    }
    
}
