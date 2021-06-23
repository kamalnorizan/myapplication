<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = [
            [
                'title'=>'Masak apa hari ini?',
                'body'=>'Gulai Ikan'
            ],
            [
                'title'=>'Masak apa malam ini?',
                'body'=>'Sambal Tempoyak'
            ],
            [
                'title'=>'Hari ini pergi mana?',
                'body'=>'Belajar Laravel di rumah sahaja.'
            ],
        ];
        $comment = 'This is a new comment';
        // return view('posts.index',[
        //     'posts'=>$posts,
        //     'comment'=>$comment
        // ]);


        return view('posts.index',compact('posts','comment'));
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
        $posts = [
            [
                'title'=>'Masak apa hari ini?',
                'body'=>'Gulai Ikan',
                'author'=>'Kamal'
            ],
            [
                'title'=>'Masak apa malam ini?',
                'body'=>'Sambal Tempoyak',
                'author'=>'Amir'
            ],
            [
                'title'=>'Hari ini pergi mana?',
                'body'=>'Belajar Laravel di rumah sahaja.',
                'author'=>'Zainal'
            ],
        ];


        return view('posts.userposts',compact('posts'));

    }
}


