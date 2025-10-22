<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Form</title>
</head>
<body>
    <h2>Enter Your Name</h2>
    <form method="post" action="">
        <input type="text" name="username" placeholder="Type your name" required>
        <input type="text" name="cityname" placeholder="Type your city" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['username']);
        $cname = htmlspecialchars($_POST['cityname']); // sanitize input
        echo "<h3>Hello, " . $name . "!</h3>";
        echo "<h3>Welcomeee, " . $cname . "!</h3>";
    }
    ?>
</body>
</html>
