@extends('admin.layout')
@section('content')
    <h1>Добавить Лендинг</h1>
    @yield('form_open')

    <div class="form-group ">
        {!! Form::label('h1', 'H1(name):') !!}
        {!! Form::text('h1') !!}
    </div>
    <div class="form-group ">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email') !!}
    </div>
    <div class="form-group ">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title') !!}
    </div>
    <div class="form-group ">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::text('description') !!}
    </div>
    <div class="form-group">
        @if(!empty($lending['banner']))
            <img class="banner_img" src="{{url($lending['banner'])}}">
            @else
            <img class="banner_img" src="{{url('storage/images/noimage-300x300.jpg')}}">
            @endif
        <br>
        {!! Form::label('banner', 'Banner:') !!}
        Recommend  (1920*625)
        {!! Form::file('banner') !!}
    </div>
    <div class="form-group ">
        {!! Form::label('keywords', 'Keywords:') !!}
        {!! Form::text('keywords') !!}
    </div>

    <div class="form-group ">
        {!! Form::label('first_price', 'Первая цена:') !!}
        {!! Form::number('first_price') !!}
    </div>
    <div class="form-group ">
        {!! Form::label('first_price', 'Вторая цена:') !!}
        {!! Form::number('second_price') !!}
    </div>

    <div class="form-group ">
        {!! Form::label('order_description', 'Описание товара:') !!}<br>
        {!! Form::textarea('order_description', null, ['class'=>'summernote']) !!}
    </div>
    <div class="form-group ">
        {!! Form::label('order_delivery', 'Описание доставки:') !!}<br>
        {!! Form::textarea('order_delivery', null, ['class'=>'summernote']) !!}
    </div>
    <div class="form-group ">
        {!! Form::label('order_delivery', 'Общий цвет:') !!}<br>
        {{ Form::input('color', 'background_color', null, array('class' => 'input-big')) }}
    </div>
    <div class="form-group ">
        {!! Form::label('order_delivery', 'Фотовый цвет:') !!}<br>
        {{ Form::input('color', 'main_color', null, array('class' => 'input-big')) }}
    </div>
    <div class="form-group ">
        {!! Form::label('local_url', 'Local Url:') !!}
        {!! Form::text('local_url') !!}
    </div>
    <div class="form-group">
        {{--{!! Form::submit('Click Me!',['name'=>'add-page']); !!}--}}
        {!! Form::submit('Save!',['id'=>'save']) !!}

    </div>

    {{ Form::close() }}
@endsection