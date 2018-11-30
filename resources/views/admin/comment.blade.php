@extends('admin.layout')
@section('content')
    <h1>Добавить Комментарий</h1>
    @yield('form_open')

    <div class="form-group ">
        {!! Form::label('name', 'Имя:') !!}
        {!! Form::text('name') !!}
    </div>

    <div class="form-group">
        @if(!empty($comment['url-img']))
            <img src="{{url($comment['url-img'])}} " style="height: 150px">
        @else
            <img src="{{url('storage/images/noimage-300x300.jpg')}}"  style="height: 150px">
        @endif
        <br>
        {!! Form::label('url-img', 'Аватар:') !!}
        Recommend  (200*200)
        {!! Form::file('url-img') !!}
    </div>
    <div class="form-group ">
        {!! Form::label('content', 'Текст:') !!}
        <br>
        {!! Form::textarea('content', null, ['cols'=>45]) !!}
    </div>

    <div class="form-group">
        {{--{!! Form::submit('Click Me!',['name'=>'add-page']); !!}--}}
        {!! Form::submit('Save!',['id'=>'save']) !!}

    </div>

    {{ Form::close() }}
@endsection