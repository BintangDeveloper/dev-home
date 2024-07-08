<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> BintangDeveloper | Home </title>
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>
    <body class="font-sans antialiased bg-black text-white/50">

<div class="h-full overflow-auto fancy-scrollbar">
    <div class="h-full">
      <div class="p-4">
        <div class="glass pl-4 pr-4 pt-4 md:pl-36 md:pr-36 text-white text-center">
          <div id="greeting" class="border-6 text-4xl">Good Day</div>
          <div id="clock" class="text-center flex items-center ml-[120px] md:ml-36 md:pl-4">
            <div id="hour" class="text-7xl md:text-8xl">00</div>
            <div id="minute" class="text-4xl md:text-5xl">00</div>
            <div id="timeSuffix" class="text-lg md:text-xl">##</div>
          </div>
        </div>
        
        <div class="pl-4 pr-4 pt-4 md:pl-36 md:pr-36">
          <div class="flex gap-2 mt-2 mb-2 md:ml-20 md:pl-4">
            <div class="flex items-center gap-3 pl-4 pr-4 bg-white bg-opacity-10 rounded-tl-md rounded-bl-lg">
              <img src="https://assets.codepen.io/1468070/Google+G+Icon.png" alt="" class="h-6" />
              <input type="text" placeholder="Search anything" id="search" class="w-full h-14 bg-transparent p-4 pr-8" />
            </div>
            <button class="w-14 bg-white bg-opacity-10 rounded-tl-md rounded-br-lg" onclick="goSearch();" type="button">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </div>
          <div class="grid grid-cols-1 gap-1 mt-12 sm:grid-cols-2">
            {{--
            <a href="#" id="link1" class="flex items-center gap-2 p-4 bg-white bg-opacity-10 rounded-tl-md">
              <i class="fa-brands fa-stack-overflow text-2xl"></i>
              <div class="flex flex-col w-full overflow-hidden">
                <span class="text-sm">Stack Overflow</span>
                <span class="text-xs text-gray-400" contenteditable="true">stackoverflow.com</span>
              </div>
            </a>
            
            <a href="#" id="link2" class="flex items-center gap-2 p-4 bg-white bg-opacity-10 text-red-600 rounded-tr-md">
              <i class="fa-brands fa-github text-2xl"></i>
              <div class="flex flex-col w-full overflow-hidden">
                <span class="text-sm">Github</span>
                <span class="text-xs text-gray-400" contenteditable="true">github.com</span>
              </div>
            </a>
            --}}
            @foreach ($apps as $item)
            <a href="{{ $item['url'] }}" id="link2" class="flex items-center gap-2 p-4 bg-white bg-opacity-10 text-white rounded-tr-md">
              <i class="{{ $item['icon'] }} text-[{{ $item['color'] }}] text-2xl"></i>
              <div class="flex flex-col w-full overflow-hidden">
                <span class="text-sm">{{ $item['name'] }}</span>
                <span class="text-xs text-gray-400" contenteditable="true">{{ $item['url'] }}</span>
              </div>
            </a>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>

      <script>
      function goSearch()
      {
        var text=document.getElementById("search").value;
        var cleanQuery = text.replace(" ","+",text);
        var url='http://www.google.com/search?q='+cleanQuery;
    
        window.location.href=url;
      }
     </script>
      {{--
      <script src='https://codepen.io/Hyperplexed/pen/xxYJYjM/54407644e24173ad6019b766443bf2a6.js'></script> --}}
      @vite('resources/js/app.js')
    </body>
</html>
