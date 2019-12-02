<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?
    // Create connection
    $servername = "den1.mysql4.gear.host";
    $username = "hangmanwords";
    $password = "Lw6XS?9Ts?36";
    $conn = new mysqli($servername, $username, $password);
    $name = '';
    $points = 0;

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO Leaderboard (name, points) VALUES ($name, $points)";

    if ($conn->query($sql) === TRUE) {
        echo "You've been added to the leaderboard!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    <script src="demo_newfile.js"></script>
</body>
</html>
