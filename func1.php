<html>
<!--Add a student to the Student table--> 
    <body>
        <form action="func1.php" method="post">
            Student's ID: <input type="text" name="id" id="id"><br>
            Student's Name: <input type="text" name="name" id="name"><br>
            Student's Major: <input type="text" name="major" id="major"><br>
            <input name="submit" type="submit">
        </form>
        <button type="button" onclick=main()>Main Menu</button>
        <p id="error"></p>
    </body>
    <script>
        function main() {
            window.location.replace("/~raculber/mainMenu.html");
        }
    </script>
</html>
<?php
    include('php_db.php');
    $id = $_POST[id];
    $name = $_POST[name];
    $major = $_POST[major];
    if (isset($_POST['submit'])) {
        $myDb = new php_db('raculber','aib2Oi5L','raculber');
        $myDb->initDatabase();

        $Student = $myDb->query('SELECT StudentId, StudentName, Major FROM Student'); 
        echo '<br>Table Student before:';
        $myDb->printTable($Student);

        $values = $id . ',\'' . $name . '\', \'' . $major . '\'';
        $fields = '(StudentId, StudentName, Major)';
        $myDb->insert('Student', $fields, $values);

        $Student = $myDb->query('SELECT StudentId, StudentName, Major FROM Student'); // select ALL from Restaurant
        echo '<br>Table Student after:';
        $myDb->printTable($Student);
    }
?>
