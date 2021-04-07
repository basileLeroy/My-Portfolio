<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MailBox</title>
</head>
<body>
    <h1>Contact Messages</h1>
    <p>Email: {{ $details['email'] }}</p>
    <p>Name: {{ $details['name'] }}</p>
    <p>Last Name: {{ $details['lastName'] }}</p>
    <p>City: {{ $details['city'] }}</p>
    <p>Message: {{ $details['message'] }}</p>
</body>
</html>