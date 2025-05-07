<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device_width, height=device_height">
        <meta name="description" content="Help Desk ">
        <meta name="keywords" content="HTML, Form, tags, Swinburne, Help Desk, Appointment">
        <meta name="author" content="Manroop Singh Puar">
        <title>CWA Help Desk Appointment</title>
    </head>
    <body>
        <form method="post" action="process.php">
            <label for="username">Username:</label>
            <input type="text" name="username" required><br>
            <label for="password"> Password:</label>
            <input type="password" name="password" required><br>
            <input type="hidden" name="token" value="abc123">
            <input type="submit" value="Login">
        </form>
    <?php
        include 'header.inc';
        include 'footer.inc';
    ?>
    </body>
</html>