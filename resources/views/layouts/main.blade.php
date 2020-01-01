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

            @yield('content')

            @include('partials._footer')

        </div>

        @include('partials._scripts')

        @yield('scripts')

    </body>
</html>