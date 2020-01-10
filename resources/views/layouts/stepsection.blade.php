<!doctype html>
<html lang="en">

    <head>
        @include('partials._head')
    </head>

    <body>

        @include('partials._navbar')

        {{-- Start of Main Section --}}
        <div class="container" style="margin-top: 15px;">
            
            {{-- Debug for AUthentication --}}
            @component('components.who')
            @endcomponent

            @include('partials._messages')

            <div class="row">
                <div class="col-sm-9">
                    <h3>@yield('title')</h3>
                </div>
                <div class="col-sm-3">
                    <a href="{{ route('steps.dashboard') }}" class="btn btn-sm btn-block btn-info">Step Work Dashboard</a>
                </div>
            </div>

            @yield('content')

            @include('partials._footer')

        </div>

        @include('partials._scripts')

        @yield('scripts')

    </body>
</html>