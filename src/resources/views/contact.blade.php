<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>

<h1> Contact us </h1>


<form action="{{ route('contact') }}" method="post">

    {{ csrf_token() }}

    Name: <input type="text" name="name" placeholder="Name"> <br>
    Email: <input type="email" name="email" placeholder="email"> <br>
    Message: <textarea name="message" id="" cols="30" rows="10"></textarea> <br>

    <input type="submit" value="Submit">

</form>


</body>
</html>