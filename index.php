<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Form</title>
</head>
<body>
    <h2>Enter Your Name</h2>
    <form method="post" action="">
        <div>
            <input type="text" name="username" placeholder="Type your name" required>
            <input type="text" name="cityname" placeholder="Type your city" required>
            <input type="text" name="cityname1" placeholder="Type your city" required>
        </div>
        <br>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['username']);
        $cname = htmlspecialchars($_POST['cityname']); 
        $cname1 = htmlspecialchars($_POST['cityname1']);// sanitize input
        echo "<h3>Hello, " . $name . "!</h3>";
        echo "<h3>Welcome to " . $cname . "!</h3>";
        echo "<h3>Welcome to " . $cname1 . "!</h3>";
    }
    ?>
</body>
</html>
