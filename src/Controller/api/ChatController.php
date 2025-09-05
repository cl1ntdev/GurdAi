<?php
namespace App\Controller\api;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Services\BotResponse;
// user input chat and bot input chat

class ChatController extends AbstractController{
    #[Route('/api/chat', name:'api_chat', methods:['POST'])]
    public function chat(Request $request, BotResponse $botResponse){

        $data = json_decode($request->getContent(), true);
        $userMessage = $data['message'] ?? '';
        $response = $botResponse->async($userMessage);
        return new JsonResponse(['response' => $response]);

    }
}
