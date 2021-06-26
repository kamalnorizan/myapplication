<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use DB;
use Carbon\Carbon;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Select * from posts
        // $posts =  Post::all();

        // Select * from posts where id < 50
        // $posts = Post::where('id','<',50)->get();

        // Select * from posts where id < 50 AND title like '%fa%'
        // $posts = Post::where('id','<',50)->where('title','like','%fa%')->get();

        // Select * from posts where id < 50 AND title like '%fa%'
        // $posts = Post::where([
        //             ['id','<',50],
        //             ['title','like','%fa%']
        //         ])
        //         ->orWhere([
        //             ['id','>',10],
        //             ['title','like','%as%']
        //         ])
        //         ->get();

        // $posts = Post::with(['user'=> function($q){
        //     $q->where('id',1);
        // },'comments.user'])->get();

        $posts = Post::with('user','comments.user')->get();

        $post = Post::first();

        $comments = Comment::with('post.user.posts','user.posts')->get();
        // dd($comments->first());

        // $posts = DB::table('posts')
        //         ->join('users','posts.user_id','=','users.id')
        //         ->leftjoin('comments','posts.id','=','comments.post_id')
        //         ->leftjoin('users as userComment','comments.user_id','=','userComment.id')
        //         ->select('posts.*','comments.*','users.name as userName', 'userComment.name as userCommentName')
        //         ->get();

        // $comments = DB::table('comments')
        //         ->join('users','comments.user_id','users.id')
        //         ->select('comments.id as comment_id','comments.*', 'users.*')
        //         ->get();

        // Select * from comments
        // Perbezaan query builder dan eloquent
        // $comments2 = Comment::with()->where('id','<',30)->get();

        // $comments = DB::table('comments')->where('id','<','30')->get();
        // dd($comments->first());


        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('posts.show',compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function displayName()
    {
        $name = 'Ahmad Kamal';
        return view('posts.displayName',[
            'nama'=>$name
        ]);
    }

    public function userposts()
    {
        $comments = DB::table('comments')
                ->join('users','comments.user_id','users.id')
                ->join('posts','comments.post_id','posts.id')
                ->select('comments.id as comment_id','posts.*', 'comments.*', 'users.*')
                ->get();
        $commentsEloquent = Comment::with('user','post')->get();
        // dd($comments);


        return view('posts.userposts',compact('comments','commentsEloquent'));

    }
}


