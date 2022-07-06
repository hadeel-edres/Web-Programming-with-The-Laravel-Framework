@component('mail::message')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Email</title>
</head>
<body>
    <h1> {{$details['title']}} </h1>
    <p> {{$details['body']}} </p>
    <p>Thank you</p>

@component('mail::button', ['url' => 'http://127.0.0.1:8000/', 'color' => 'success'])
View
@endcomponent

    
</body>
</html>

@endcomponent