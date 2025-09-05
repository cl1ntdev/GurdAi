<?php
// src/Services/BotResponse.php 
namespace App\Services;

//  THIS IS WHERE I DO SOME AI STUFF
class BotResponse{
    public function async (string $request): string{
        return "request is " . $request;    
    }
}