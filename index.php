<!DOCTYPE html>
<html>
<head>
    <title>PHP Docker Example</title>
</head>
<body>
    <h1>Hello, PHP!</h1>
    <?php
        echo "<p>This is a simple PHP web page running in a Docker container.</p>";
        $current_date = date('Y-m-d H:i:s');
        echo "<p>Current date and time is: $current_date</p>";
    ?>
</body>
</html>
