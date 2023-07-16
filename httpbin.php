<?php


$contexto = stream_context_create([
    'htpp' => [
        'method' => 'POST',
        'header' => "X-From: PHP\r\nContent-Type: text/plain",
        'content' => 'teste do body'
    ]
]);


echo file_get_contents('http://httpbin.org/post', false, $contexto);









