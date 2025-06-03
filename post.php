// set post fields
$post = [
    'secret' => $secret,
    'response' => $_POST['g-recaptcha-response'],
    'remoteip'   => $_SERVER['REMOTE_ADDR']
];

$ch = curl_init('https://www.google.com/recaptcha/api/siteverify');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

// execute!
$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);

// do anything you want with your response
var_dump(json_decode($response));