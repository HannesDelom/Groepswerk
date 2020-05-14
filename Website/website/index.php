<html>
    <head>
        <title>Mijn School</title>
    </head>

    <body>
        <h1>Welcome to my school</h1>
        <ul>
            <?php
            $json = file_get_contents('http://35.205.124.220/');
            $obj = json_decode($json);
            $students = $obj->student;
            foreach ($student as $students) {
                echo "<li>$student</li>";
            }
            ?>
        </ul>
    </body>
</html>
