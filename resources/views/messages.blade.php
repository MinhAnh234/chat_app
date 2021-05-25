<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    <div></div>
    <form method="POST" action="/addMessage/{{Auth::id()}}">
        @csrf
        <input type="hidden" value="1" name="chat_room_id">
        <input type="hidden" value="{{Auth::id()}}" name="user_id">
        Content:<input type="text" name="message"></br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
