<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" style="text-transform: uppercase" href="{{url('admin/home')}}"><?=$_SERVER['SERVER_NAME'] ?></a>
        </div>
        <ul class="nav navbar-nav">
            {{--<li class="active"><a href="/">Site</a></li>--}}
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Лендинги <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{url('admin/all-lendings')}}">Все лендинги</a></li>
                    <li><a href="{{url('admin/add-lending')}}">Добавить лендинг</a></li>
                    {{--<li><a href="#">Page 1-3</a></li>--}}
                </ul>
            </li>
            <li><a href="{{url('admin/statistic')}}">Статистика</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Auth::user()->name }}
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li>                    <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form></li>

                </ul>
            </li>

        </ul>
    </div>
</nav>