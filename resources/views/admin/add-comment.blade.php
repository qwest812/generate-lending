@extends('admin.comment')
@section('form_open')
    {{ Form::open(array('url' => 'admin/save-comment/'.request()->route('id'), 'files' => true)) }}
    @endsection