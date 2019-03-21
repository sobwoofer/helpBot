<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\TelegramClient;
use Telegram;

class BotController extends Controller
{
    public function index()
    {
        $response = Telegram::getMe();

        $botId = $response->getId();
        $firstName = $response->getFirstName();
        $username = $response->getUsername();

        $update = Telegram::commandsHandler(false);

    }
}
