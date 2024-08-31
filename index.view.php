
<!doctype html>
<html data-theme="dark">
    <head>
        <link rel="stylesheet" href="/pico.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Greeting App </title>
</head>
<body>
    <div style="margin:20px">
        <form method="post" action="index.php">
            <div>
                <label>Name</label>
                <input type="text" name="name" required>
            </div>
            <div> 
                <label>Favorite Food</label>
                <input type="radio" name="food" value="Idli Sambhar" required> Idli Sambhar
                <input type="radio" name="food" value="Pulao" required> Pulao
                <input type="radio" name="food" value="Chole Bhature" required>Chole Bhature
            </div> 
        
          
            <div>
                <input type="submit" style="margin-top: 10px;">
            </div>
        </form>
    </div> 
</body>
</html> 