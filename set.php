<?php

use Longman\TelegramBot\Exception\TelegramException;
use Longman\TelegramBot\Telegram;

require __DIR__ . '/vendor/autoload.php';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram(Constants::$botApiKey, Constants::$botUsername);
    $result = $telegram->setWebhook(Constants::$hookUrl);
    if ($result->isOk()) {
        echo "Successfuly set your hook url";
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo $e->getMessage();
}