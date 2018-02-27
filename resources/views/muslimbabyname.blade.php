<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Muslim Baby Names</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app">
        <app-navbar></app-navbar>
        <div class="container">
            <router-view></router-view>
        </div>
        <app-footer></app-footer>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>