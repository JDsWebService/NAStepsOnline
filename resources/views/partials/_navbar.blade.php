{{-- Bootstrap Navbar --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    
        <span class="navbar-toggler-icon"></span>
    
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('jft.show') }}">Just For Today</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('news.index') }}">News</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>

        </ul>
        
        <ul class="navbar-nav">
            <!-- Authentication Links -->
            @guest
                <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->first_name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Link</a>
                        <a class="dropdown-item" href="#">Link</a>
                        <a class="dropdown-item" href="{{ route('user.settings') }}">
                            <i class="fas fa-cog"></i> Edit Settings
                        </a>

                        <div class="dropdown-divider"></div>
                        
                        <a class="dropdown-item" href="{{ route('user.logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>

                        <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>
{{-- End Navigation --}}