@extends('admin.layout')
@section('content')
{{--@include('admin.component.add-comment')--}}
    <div><a href="{{url('admin/lending/add-comment',request()->route('id'))}}">Добавить Комментарий</a>
    </div>

    @foreach($comments as $value)
        <div class="row">
            <div class="col-md-3">{{$value['name']}}</div>
            <div class="col-md-3"><a href="{{url('admin/edit-comment',$value['id'])}}">Изменить</a></div>
            <div class="col-md-3"><a href="{{url('admin/delete-comment',[$value['id'],request()->route('id')])}}">Удалить</a></div>
            <div class="col-md-3"></div>
        </div>
    @endforeach
    @endsection