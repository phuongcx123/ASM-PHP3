<?php

namespace App\Http\Controllers\Client;


use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index(){


        $postNew = Post::query() ->latest('id')->limit(4)->get();
        $postHot = Post::where('is_hot','1')->orderBy('created_at','desc')->limit(4)->get();
        $postTrend = Post::where('is_trend','1')->orderBy('created_at','desc')->limit(10)->get();
        $postPopular =Post::with('category') -> get();
        $data  = [

            'new'=> $postNew,
            'hot'=>$postHot ,
            'trend' => $postTrend ,
            'popular' => $postPopular
        ] ;


         return view("Client.home" , compact("data"));
    }
    public function profile(){
        $data = Auth::user() ;
        return view("Client.proflie" , compact("data"));
    }
    public function profileEdit( Request $request,User $user){
        $user -> update($request->user);
        $data = $request->userdetail;
        if ($request->hasFile('avata_img')) {
            $data['avata_img'] = Storage::put('avta', $request->file('avata_img'));
            if(!empty($user->avata_img) && Storage::exists($user->avata_img)) {
                Storage::delete($user->avata_img) ;
            }
        }
        $user -> userdetail()->update($data);
        return back();
    }
}
