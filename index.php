
<!DOCTYPE html>
<html>
<head>
    <title>PHP Docker Example</title>
</head>
<body>
    <h1>Hello, PHP!</h1>
    <?php
        echo "<p>This is a simple PHP web page running in a Docker container.</p>";

        // Current date and time
        $current_date = date('Y-m-d H:i:s');
        echo "<p>Current date and time is: $current_date</p>";

        // Host IP address
        $host_ip = gethostbyname(gethostname());
        echo "<p>Host IP address is: $host_ip</p>";

        // User IP address
        $user_ip = $_SERVER['REMOTE_ADDR'];
        echo "<p>User IP address is: $user_ip</p>";
    ?>
</body>
</html>
