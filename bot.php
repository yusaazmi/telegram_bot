<?php

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\Drivers\Telegram\TelegramDriver;


require "vendor/autoload.php";

$configs = [
    "telegram" => [
        "token" => "2026508294:AAFKKSP2Ei4YnqVDSkNrITDiLZmjK72Iahs"
    ]
];

DriverManager::loadDriver(TelegramDriver::class);

$botMan = BotManFactory::create($configs);

$botMan->hears("/start", function(BotMan $bot){
    $bot->reply("Halo kenalin aku bot buatan Mas Azmi \nMeilinda mau tanya apa? \n/halo\n/Sayang_Aku?\n/Kangen_Ga?\n/Disayang");
});
$botMan->hears("/halo", function(BotMan $bot){
    $bot->reply("Halo juga Meilinda sayang \xF0\x9F\x98\x98");
});
$botMan->hears("/Sayang_Aku?",function(BotMan $bot){
    $bot->reply("Gausah ditanya, Mas Azmi sayang banget sama Meilinda Balqies \xF0\x9F\x92\x93");
});
$botMan->hears("/Kangen_Ga",function(BotMan $bot){
    $bot->reply("B aja \xF0\x9F\x98\x82 \xF0\x9F\x98\x82 \xF0\x9F\x98\x82");
    $bot->reply("Tapi kadang kangen banget sih hehe  \xF0\x9F\x98\x8A");
});
$botMan->hears("/Disayang",function(BotMan $bot){
    $bot->reply("GAK MAU \xF0\x9F\x98\x9D \xF0\x9F\x98\x9D");
    $bot->reply("Bilang /please dulu");
});
$botMan->hears("/please",function(BotMan $bot){
    $bot->reply("Nih kalo maksa \xF0\x9F\x98\x9A \xF0\x9F\x98\x9A \xF0\x9F\x98\x9A \xF0\x9F\x98\x9A \xF0\x9F\x98\x9A");
});

$botMan->listen();

?>