<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!DOCTYPE html><title>Personal Portfolio Website Using HTML & CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.8.0/fonts/remixicon.css">
    <link rel="stylesheet" href="{{asset('frontend/index.css')}}">   
</head>

<body>
<div class="container">
   @include('frontend_layout.header')

   @yield('content')
    
   @include('frontend_layout.footer')
</div>
</body>


</html>