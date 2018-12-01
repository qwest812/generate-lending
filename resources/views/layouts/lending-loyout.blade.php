{{--@dump($lending)--}}
{{--@dump($comments)--}}
        <!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
@include('component.header')
<body>
<!--Button style start-->
<style type="text/css">
    button.push-btn {
        background: -moz-linear-gradient(#A1A4A6, #020608, #A1A4A6);
        background: -webkit-gradient(linear, 0 0, 0  100%, from(#A1A4A6), to(#A1A4A6), color-stop(0.5, #020608));
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00BBD6', endColorstr='#EBFFFF');
        padding: 3px 7px;
        color: white;
    }
    button.push-btn:hover {
        color: {{$lending['main_color']}};
    }
    button.push-btn:active {
        color: {{$lending['main_color']}};

    }
</style>



<!--Button style end-->
<header class="top-container" style="background-image: url({{url($lending['banner'])}})">
    @include('component.navigation')
    @include('component.main-top')
</header>

@include('component.description')

@include('component.feedback')
@include('component.delivery')
@include('component.bottom-main')


<footer class="footer-section" style="background-color:  {{$lending['background_color']}}">
    <p>&copy; 2018 {{$_SERVER['SERVER_NAME']}}<p>
</footer>
@include('component.modales-window')
<!-- Attached button start-->
<div class="rnd-btn"><a id="btnAt" href="#" class="round yellow">ЗАКАЗАТЬ<span class="round">ЗАКАЗАТЬ СО СКИДКОЙ</span></a></div>
<!-- Attached button end -->

@include('component.footer')
</body>
</html>