<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/posts" method="post">
        @csrf
        <a href="/posts">Return</a>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title">
        <label for="content">Content:</label>
        <textarea name="content" id="content"></textarea>
        <input type="submit" value="Submit">
    </form>
</body>
</html>