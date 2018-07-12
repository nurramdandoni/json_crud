<?php 
$data = [
    'phone' => '085721299931', // Receivers phone
    'body' => 'Hello, teh Titie! !', // Message
];
$json = json_encode($data); // Encode data to JSON
// URL for request POST /message
$url = 'https://foo.chat-api.com/message?token=83763g87x';
// Make a POST request
$options = stream_context_create(['http' => [
        'method'  => 'POST',
        'header'  => 'Content-type: application/json',
        'content' => $json
    ]
]);
// Send a request
$result = file_get_contents($url, false, $options);

 ?>
