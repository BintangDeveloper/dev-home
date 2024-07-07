<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $apps = array(
      [
        "name" => "Stack Overflow",
        "text" => "text-gray",
        "icon" => "fa-brands fa-stack-overflow",
        "url" => "stackoverflow.com"
      ],
      [
        "name" => "Github",
        "text" => "text-white",
        "icon" => "fa-brands fa-github",
        "url" => "github.com"
      ],
      [
        "name" => "Chat GPT",
        "text" => "text-green",
        "icon" => "fa-solid fa-ellipsis",
        "url" => "chat.openai.com"
      ],
      [
        "name" => "CodePen",
        "text" => "text-white",
        "icon" => "fa-brands fa-codepen",
        "url" => "codepen.io"
      ],
      [
        "name" => "Discord",
        "text" => "text-blue",
        "icon" => "fa-brands fa-discord",
        "url" => "discord.com"
      ],
      [
        "name" => "More",
        "text" => "text-white",
        "icon" => "fa-solid fa-ellipsis",
        "url" => ""
      ],
      
    );
    
    return view('index', compact('apps'));
});

Route::get('/Laravel/welcome', function () {
    return view('welcome');
});
