<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <script src="{{ mix('/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    
</head>
<body>
    <div id="app">
        <v-app>
            <header-component></header-component>
            <router-view></router-view>
        <!-- <v-main>
            <div>aa</div>
            <p>newaa</p>

        </v-main> -->


        <!-- <main class="py-4"> -->
            <!-- <header-component></header-component> -->
            <!-- <example-component></example-component> -->
            <!-- <router-view></router-view> -->
        <!-- </main> -->
        </v-app>
    </div>
</body>
</html>
