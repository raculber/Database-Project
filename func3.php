<html>
<!--Add an application to the Enrollment table--> 
    <body>
        <form action="func3.php" onsubmit="return testForm()" method="post">
            Student ID: <input type="text" name="id" id="id"><br>
            Department code: <input type="text" name="code" id="code"><br>
            Course number: <input type="text" name="courseNumber" id="courseNumber"><br>
            <input name="submit" type="submit">
        </form>
        <button type="button" onclick=main()>Main Menu</button>
        <p id="error"></p>
    </body>
    <script>
        function testForm() {
            if (document.getElementById("id").value < 0 || 
            typeof (document.getElementById("id").value) == 'string') {
                document.getElementById("error").innerHTML = "Error: Invalid ID"; 
                return false;
            }
            else if (document.getElementById("code").value.length > 50) {
                document.getElementById("error").innerHTML = "Error: Invalid Department Code";
                return false;
            }
            else if (document.getElementById("courseNumber").value < 0) {
                document.getElementById("error").innerHTML = "Error: Invalid Course Number";
                return false;
            }
            return true;
        }
        function main() {
            window.location.replace("/~raculber/mainMenu.html");
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

        $Enrollment = $myDb->query('SELECT StudentId, DeptCode, CourseNum FROM Enrollment'); 
        echo '<br>Table Enrollment before:';
        $myDb->printTable($Enrollment);

        $values =  $id . ',\'' . $code . '\',' . $courseNumber;
        $fields = '(StudentId, DeptCode, CourseNum)';
        $myDb->insert('Enrollment', $fields, $values);

        $Enrollment = $myDb->query('SELECT StudentId, DeptCode, CourseNum FROM Enrollment'); 
        echo '<br>Table Enrollment after:';
        $myDb->printTable($Enrollment);
    }
?>