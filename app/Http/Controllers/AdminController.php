<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Lending;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.layout');
    }
    function addLending()
    {
        return view('admin.add-lending');
    }

    function allLending()
    {
        $lendings=Lending::all()->sortByDesc('id')->toArray();
        return view('admin.all-lendings', compact('lendings'));
    }
    function editLending($id){
        $lending= Lending::find($id);
        return view('admin.edit-lending', compact('lending'));
    }
    function updateLending(Request $request, $id){
        $lending= Lending::find($id);
        $input=$request->toArray();
        if (!isset($input['banner'])) {
            $input['banner'] = $lending['banner'];
        } else {
            $file = $request->file('banner');
            $path = $this->saveImg($file);
            $input['banner'] = $path;
        }
        $lending->update($input);
        return redirect('/admin/edit-lending/' . $id);

    }
    function deleteLending($id){
     Lending::find($id)->delete();
     return redirect('admin/all-lendings');
    }
    

    function saveLending(Request $request)
    {
        $input = $request->all();
        unset($input['files']);
        $banner_file = $request->file('banner');

        $pathBanner = $this->saveImg($banner_file);
//        var_dump($pathBanner);
        $input['banner'] = $pathBanner;
        Lending::create($input);
        return redirect('admin/all-lendings');

    }
    function categoriesLending($id){
        $comments =Comment::all()->where('lending_id', $id)->sortByDesc('id')->toArray();
//        var_dump($comments);
        return view('admin/comments-lending',compact('comments'));
    }

    function addCommentLending($id){
        return view('admin.add-comment',compact('id'));
    }
    function saveComment(Request $request, $id){
        $input =$request->all();
        unset($input['_token']);
        $banner_file = $request->file('url-img');
        $pathBanner = $this->saveImg($banner_file);
        $input['url-img'] = $pathBanner;
        $input['lending_id']=$id;
        Comment::create($input);
        return redirect('admin/lending/comments/'.$id);
    }
    function deleteComment($id,$lending_id){
        $comment=Comment::find($id);
        $comment->delete();
        return redirect('admin/lending/comments/'.$lending_id);
    }
    function editComment($id){
        $comment=Comment::find($id);
        return view('admin/edit-comment', compact('comment'));
    }

    public function upload(Request $request)
    {
//        echo $request->file()['file'];
        $originalFileName = $request->file()['file']->getClientOriginalName();
        $path_img = ($request->file()['file'])->storeAS('/public/images', $originalFileName);
//        echo  $path_img;
        echo '/storage/images/' . $originalFileName;
    }

    protected function saveImg($file)
    {
        if ($file) {
            $originalFileName = $file->getClientOriginalName();
            $path_img = $file->storeAS('/public/images', $originalFileName);
            return 'storage/images/' . $originalFileName;
        } else {
            return 'images/no-img.jpg';
        }
    }
}
