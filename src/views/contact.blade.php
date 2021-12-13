<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact us anytime</h1>

    <form action="{{ route('contact') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter your name">
        <input type="email" name="email" placeholder="Enter your email">
        <input type="text" name="message" placeholder="Enter your message">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
