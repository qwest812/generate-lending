
@extends('admin.comment')
@section('form-open')
    {!! Form::model($comment, ['method' => 'POST', 'url' => 'admin/update-comment/' . $comment->id,'files' => true]) !!}
@endsection