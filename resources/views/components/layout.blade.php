<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Netflix | {{isset($title)?$title: 'HomePage'}}</title>
    @vite('resources/css/app.css')
</head>
<body>
    {{-- nav bar and bg img --}}
    <div>
        <div class='h-svh bg-gradient-to-b from-black from-70% absolute top-0 z-0 opacity-70 w-svw transition-colors duration-200'></div>
        <img src="{{asset('assets/img/css/bg.jpg')}}" alt="" class='w-svw h-svh'>
        
    </div>
   <div class="w-[80%] mx-auto ">
        <div class='absolute top-0 w-[80%]'>
            @auth
                @include('navbars.homepageNav')
                @else
                    @include('navbars.registerNav')
            @endauth
        </div>
        
    </div>
    
    
    {{$slot}}
    
</body>
</html>