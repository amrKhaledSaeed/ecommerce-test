<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\comment;



class PostController extends Controller
{
    public function getAllPost(){
        $post= Post::whereBetween('id',[33,44])->orderBy('id','DESC')->get();//to get all data from table posts
        return view('pages/post',compact('post'));
    }

    public function addPost(){
        return view('pages/add-post');
    }

    public function addPostSubmit(Request $request){
       post::insert([
            'title'=>$request->title,
            'body'=>$request->body
        ]);
        return back()->with('post_created','Post has been Created succefully!');
    }

    public function getPostById($id){
        $post=DB::table('posts')->where('id',$id)->first();
        return view('pages/single_post',compact('post'));
    }

    public function deletePostById($id){
        DB::table('posts')->where('id',$id)->delete();
         return back()->with('post_deleted','this post is deleted successfully');
    }

    public function editePost($id){
        $post=DB::table('posts')->where('id',$id)->first();
        return view('pages/edit_post',compact('post'));
    }

    public function updatePost(Request $request){
        DB::table('posts')->where('id',$request->id)->update([
            'title'=>$request->title,
            'body'=>$request->body
        ]);
         return back()->with('post_update','this post is updated successfully');
    }

    public function innerJoinCaluse(){
        $request=DB::table('users')
        ->join('posts','users.id','=','posts.user_id')
        ->select('users.name','posts.title','posts.body')
        ->get();
        return $request;
    }

    public function rightJoinCaluse(){
        $result=DB::table('users')
        ->rightJoin('posts','users.id','=','posts.user_id')
        ->get();
        return $result;
    }

    public function leftJoinCaluse(){
        $result=DB::table('users')
        ->leftJoin('posts','users.id','=','posts.user_id')
        ->get();
        return $result;
    }

    public function getAllPostsModel(){
       $post = Post::all();       //Post:is model name
        return $post;
    }

    public function addPost2(){
        $post=new Post();
        $post->title='mohamed';
        $post->body='first mohamed';
        $post->save();
        return 'post has been created';
    }

    public function addComment($id){
        $post=Post::find($id);
        $comment=new comment();
        $comment->comment='new comment';
        $post->comments()->save($comment);
        return 'comment has been posted';

    }
    public function getCommentByPost($id){
        $comment=Post::find($id)->comments;
        return $comment;
    }

}//end class
