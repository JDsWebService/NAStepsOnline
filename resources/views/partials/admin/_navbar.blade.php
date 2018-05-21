{{-- Bootstrap Navbar --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('admin.dashboard') }}">{{ config('app.name') }} <small>Administrator</small></a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    
        <span class="navbar-toggler-icon"></span>
    
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="/">Site Home</a>
            </li>

        </ul>
        
        <ul class="navbar-nav">
            <!-- Authentication Links -->
            @auth('admin')
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::guard('admin')->user()->first_name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                            Dashboard
                        </a>
                        
                        <a class="dropdown-item" href="{{ route('jft.index') }}">
                            Just For Today
                        </a>
                        <a class="dropdown-item" href="{{ route('news.admin.index') }}">
                            News
                        </a>

                        <div class="dropdown-divider"></div>
                        
                        <a class="dropdown-item" href="{{ route('admin.logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endauth
        </ul>
    </div>
</nav>
{{-- End Navigation --}}