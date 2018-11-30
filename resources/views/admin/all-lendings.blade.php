{{--@dump($lendings)--}}
@extends('admin.layout')
@section('content')
<div class="container">
    @foreach($lendings as $value)
        <div class="row lendings">
            <div class="col-md-2">{{$value['h1']}}</div>
            <div class="col-md-2"><a href="{{url('admin/edit-lending',$value['id'])}}">Изменить</a></div>
            <div class="col-md-2"><a href="{{url('admin/lending/comments',$value['id'])}}">Комментарии</a></div>
            <div class="col-md-2"><a href="{{url('admin/delete-lending',$value['id'])}}">Удалить</a></div>
            <div class="col-md-2"><a  target="_blank" href="{{url($value['local_url'])}}">Посетить</a></div>
            <div class="col-md-2"><a target="_blank" href="{{url($value['local_url'])}}"></a></div>
        </div>
        @endforeach
</div>
    @endsection