<html>
    <head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    </head>
 
<body>

<div id="page-wrapper" >
    @yield('content')
</div>
</body>
</html>
