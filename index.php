<html>
<head>
    <title>Web Query</title>
</head>
<body>
    <h1>PocketMine-MP Server Query</h1>
    <form name='rcon' action='webquery/post.php' method='post'>
        Server host: <input name='host' type='text' maxlength='100' value='' placeholder='Enter domain or ip address' style='width: 30%'>
        <br>
        Server port: <input name='port' type='text' maxlength='5' value='19132' style='width: 30%'>
        <br>
        <input type='submit' value='Query' style='width: 42%'>
    </form>
</body>
</html>