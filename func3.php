<html>
<!--Add an application to the Enrollment table--> 
    <body>
        <form action="func3.php" method="post">
            Student ID: <input type="text" name="id" id="id"><br>
            Department code: <input type="text" name="code" id="code"><br>
            Course number: <input type="text" name="courseNumber" id="courseNumber"><br>
            <input type="submit" value="Submit">
        </form>
        <button type="button" onclick=main()>Main Menu</button>
        <p id="error"></p>
    </body>
    <script>
        function testForm() {
            return true;
        }
        function main() {
            window.location.replace("/mainMenu.html");
        }
    </script>
</html>
<?php
    include('php_db.php');

    $id = $_POST[id];
    $code = $_POST[code];
    $courseNumber = $_POST[courseNumber];

    if (isset($_POST['submit'])) {
        $myDb = new php_db('raculber','aib2Oi5L','raculber');

        $myDb->initDatabase();
        $Enrollment = $myDb->query('SELECT StudentId, DeptCode, CourseNum FROM Enrollment'); 
        echo '<br>Table Enrollment before:';
        $myDb->printTable($Enrollment);

        $values =  $id . ',\'' . $code . '\',' . $courseNumber;
        $fields = '(StudentId, DeptCode, CourseNum)';
        $myDb->insert('Enrollment', $fields, $values);
    }
?>