@extends('admin.lending-loyout')

@section('form_open')
    {!! Form::model($lending, ['method' => 'POST', 'url' => 'admin/update-lending/' . $lending->id,'files' => true]) !!}
    @endsection