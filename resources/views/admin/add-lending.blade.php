@extends('admin.lending-loyout')

@section('form_open')
    {{ Form::open(array('url' => 'admin/save-lending', 'files' => true)) }}
    @endsection