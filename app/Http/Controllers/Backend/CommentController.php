<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function add_comment(Request $request){
        $request->validate([
            'name' =>'required|string',
            'email' =>'required|string',
            'phone' =>'required|string',
            'subject' =>'required|string',
            'comment' =>'required|string',
        ]);
        $comment= new Comment();
        $comment->parent_id= 0;
        $comment->name =$request->input('name');
        $comment->email =$request->input('email');
        $comment->phone =$request->input('phone');
        $comment->subject =$request->input('subject');
        $comment->comment =$request->input('comment');
        $comment->blog_post_id=$request->input('blog_post_id');
        $comment->save();
        return redirect()->back()->with('success', 'Comment added successfully. The comment will be published once it is approved.');
        
    }

    //blog comment
    public function blog_comment() {
    $blog_comment = Comment::with('blog_post') // eager load blog_post
        ->where('parent_id', '0')
        ->orderBy('created_at', 'desc')
        ->get()
        ->filter(function ($comment) {
            return $comment->blog_post !== null;
        })
        ->values(); // reset the collection keys

    return view('backend.blog.blog_comment', compact('blog_comment'));
}

    //approve_comment 
    public function approve_comment($id){
        $approve_comment= Comment::find($id);
        $approve_comment->status='1';
        $approve_comment->save();
        return redirect()->back()->with('success', 'Comment approved');

    }
    //delete comment
    public function delete_comment($id){
        $delete_comment=Comment::find($id);
        $delete_comment->delete();
        return redirect()->back()->with('success', 'Comment Deleted succesfull');
    }
    //reply comment
    public function reply_comment(Request $request){
        $request->validate([
            'name' =>'required|string',
            'email' =>'required|string',
            'phone' =>'required|string',
            'subject' =>'required|string',
            'comment' =>'required|string',
            'parent_id' =>'required',
        ]);
        $reply_comment= new Comment;
        $reply_comment->parent_id=$request->input('parent_id');
        $reply_comment->name =$request->input('name');
        $reply_comment->email =$request->input('email');
        $reply_comment->phone =$request->input('phone');
        $reply_comment->subject =$request->input('subject');
        $reply_comment->comment =$request->input('comment');
        $reply_comment->blog_post_id=$request->input('blog_post_id');
        $reply_comment->save();
        return redirect()->back()->with('success', 'Reply on Comment succesfull. The comment will be published once it is approved.');

    }
    // show reply in backend
    public function show_reply($id){
        $show_comment=Comment::find($id);
        return view('backend.blog.show_reply',compact('show_comment'));
    }
}
