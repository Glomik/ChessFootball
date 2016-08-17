<?php
/**
 * Telegram Bot access token и URL.
 */
$access_token = '';
$api = 'https://api.telegram.org/bot' . $access_token;

/**
 * Задаём основные переменные.
 */
$output = json_decode(file_get_contents('php://input'), TRUE);
$chat_id = $output['message']['chat']['id'];
$first_name = $output['message']['chat']['first_name'];
$message = $output['message']['text'];

$emoji = array(
  'preload' => json_decode('"\uD83D\uDE03"'), // Улыбочка.
  'clear' => json_decode('"\u2600"'), // Солнце.
  'clouds' => json_decode('"\u2601"'), // Облака.
  'rain' => json_decode('"\u2614"'), // Дождь.
  'snow' => json_decode('"\u2744"'), // Снег.
  ),
);


/**
 * Получаем команды от пользователя.
 */
switch($message) {
  case '/move':
    
   
    
    
  case '/help':
    
    $help="Возможно использовать такие команды:  /help, /move ";
    sendMessage($chat_id, $help );
    
    break;
  
  default:
    break;
}

/**
 * Функция отправки сообщения sendMessage().
 */
function sendMessage($chat_id, $message) {
  file_get_contents($GLOBALS['api'] . '/sendMessage?chat_id=' . $chat_id . '&text=' . urlencode($message));
}
