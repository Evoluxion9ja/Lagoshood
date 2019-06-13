<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ strtoupper(config('app.name', 'Laravel')) }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <form action="">
                        <i class="material-icons" style="margin-top: 10px; width:20px; height:20px;">
                            zoom_in
                        </i>
                    <input type="search" name="search" placeholder="Search" style="display:none;">
                </form>
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('register'))
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ __('Your Account')}} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <small style="margin-left: 15px;">
                                    <strong>ACCOUNT</strong>
                                </small><hr>
                                <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                                <a href="" class="dropdown-item">News Letter</a>
                                <a href="" class="dropdown-item">Manage Your Subscription</a>
                                <a href="" class="dropdown-item">Need Help</a><hr>
                                <small style="margin-left: 15px;">
                                    <strong>MORE</strong>
                                </small><hr>
                                <a href="" class="dropdown-item">Suggest New Videos</a>
                                <a href="" class="dropdown-item">Report Any Abuse</a><hr>
                            </div>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <small style="margin-left: 15px;">
                                <strong>ACCOUNT</strong>
                            </small><hr>
                                <a href="" class="dropdown-item">My Account</a>
                                <a href="" class="dropdown-item">News Letter</a>
                                <a href="" class="dropdown-item">Manage Your Subscription</a>
                                <a href="" class="dropdown-item">Need Help</a><hr>
                                <a href="" class="dropdown-item">Suggest New Videos</a>
                                <a href="" class="dropdown-item">Report Any Abuse</a><hr>
                            <small style="margin-left: 15px;">
                                <strong>DASHBOARDS</strong>
                            </small><hr>
                            <a href="{{  route('category.index') }}" class="dropdown-item">Category Dashboard</a>
                            <a href="{{  route('tag.index') }}" class="dropdown-item">Tags Dashboard</a>
                            <a href="{{  route('publish.index') }}" class="dropdown-item">Movies Dashboard</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="material-icons">dehaze</i>
                    {{strtoupper(__('Explore'))}}</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <li class="nav-item">
                    <a class="nav-link" href="#"><small>{{strtoupper(__('Movies A-Z'))}}</small></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><small>{{strtoupper(__('Hollywood'))}}</small></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><small>{{strtoupper(__('Nollywood'))}}</small></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><small>{{strtoupper(__('Bollywood'))}}</small></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><small>{{strtoupper(__('Tv Series'))}}</small></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><small>{{strtoupper(__('Documenatries'))}}</small></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><small>{{strtoupper(__('Star Cast'))}}</small></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><small>{{strtoupper(__('Music'))}}</small></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><small>{{strtoupper(__('Year'))}}</small></a>
                </li>
                &emsp;&emsp;&emsp;&emsp;&emsp;
                <li class="nav-item">
                    <a class="nav-link" href="#"><small>{{strtoupper(__('Explore'))}}</small></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
