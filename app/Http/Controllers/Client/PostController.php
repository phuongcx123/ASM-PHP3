<?php

namespace App\Http\Controllers\Client;


use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){
        $postPopular = Post::query()
        ->limit(10)->get();


    $data  = [
        'post' => $postPopular
    ] ;
        return view("Client.post" , compact("data"));
    }
    public function  show(string $id)
    {
            $postPopular =Post::query()
                ->limit(10)->get();

        $post = Post::findOrFail($id) ;
        $previousPost = Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first();
        $nextPost = Post::where('id', '>', $post->id)->orderBy('id')->first();
        $data  = [
            'post' => $postPopular
        ] ;
        // dd($nextPost);
        return view("Client.post-detail" , compact('data' , 'post', 'previousPost' , 'nextPost'));
    }
    public function catePosts(string $id){
      $data1 = Post::query()
        ->where('category_id' , '=', $id )

        ->get();
        $data  = [
            'post' => $data1
        ] ;
         return view("Client.post" , compact('data') ) ;
    }
    public function tim(Request $request){
        $keyword = $request->all();
        $data1 = Post::where('title', 'LIKE', '%' . $keyword['blog'] . '%')
            ->orWhere('content', 'LIKE', '%' .$keyword['blog'] . '%')
            ->get();

             $data  = [
               'post' => $data1
            ] ;

         return view("Client.post" , compact("data"));
    }

}
