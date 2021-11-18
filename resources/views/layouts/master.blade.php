<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- comment
        <link rel="stylesheet" href="{{ URL::secure('resources/css/styles_1.css')}}" />
        -->
        <link rel="stylesheet" href="{{ URL::asset('/../resources/css/styles_1.css') }}" />
        <script src="{{ URL::secure('resources/js/myScript_1.js')}}"></script>
        @yield('styles')
        
    </head>
    <body>
    
     <div class="main_container">
        <div class="header">@include('includes.header')</div>
        <div class="conatiner">@yield('content')</div>
        <div class="footer">@include('includes.header')</div>
    </div>
    </body>
</html>
