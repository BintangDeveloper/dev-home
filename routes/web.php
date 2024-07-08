<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $apps = array(
      [
        "name" => "Stack Overflow",
        "color" => "#808080",
        "icon" => "fa-brands fa-stack-overflow",
        "url" => "stackoverflow.com"
      ],
      [
        "name" => "Github",
        "color" => "#ffffff",
        "icon" => "fa-brands fa-github",
        "url" => "github.com"
      ],
      [
        "name" => "Chat GPT",
        "color" => "#008000",
        "icon" => "fa-solid fa-comments",
        "url" => "chat.openai.com"
      ],
      [
        "name" => "CodePen",
        "color" => "#ffffff",
        "icon" => "fa-brands fa-codepen",
        "url" => "codepen.io"
      ],
      [
        "name" => "Discord",
        "color" => "#0000FF",
        "icon" => "fa-brands fa-discord",
        "url" => "discord.com"
      ],
      [
        "name" => "More",
        "color" => "text-white",
        "icon" => "fa-solid fa-ellipsis",
        "url" => ""
      ],
      
    );
    
    return view('index', compact('apps'));
});

Route::get('/Laravel/welcome', function () {
    return view('welcome');
});
