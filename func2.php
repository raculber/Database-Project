<html>
<!--Add a course to the Course table--> 
    <body>
        <form action="func2.php" method="post">
            Department code: <input type="text" name="deptCode" id="deptCode"><br>
            Course number: <input type="text" name="courseNum" id="courseNum"><br>
            Title: <input type="text" name ="title" id="title"><br>
            Credit hours: <input type="text" name="creditHours" id="creditHours"><br>
            <input type="submit" value="Submit">
        </form>
        <button type="button" onclick=main()>Main Menu</button>
        <button type="button" onclick=main()>Other Menu</button>
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

    $deptCode = $_POST[deptCode];
    $courseNum = $_POST[courseNum];
    $title = $_POST[title];
    $creditHours = $_POST[creditHours];

    if (isset($_POST['submit'])) {
        $myDb = new php_db('raculber','aib2Oi5L','raculber');

        $myDb->initDatabase();

        $Course = $myDb->query('SELECT DeptCode, CourseNum, Title, CreditHours FROM Course'); 
        echo '<br>Table Course before:';
        $myDb->printTable($Course);

        $values = '\'' . $deptCode . '\',' . $courseNum . ', \''. $title . '\',' . creditHours;
        $fields = '(DeptCode, CourseNum, Title, CreditHours)';
        $myDb->insert('Restaurant', $fields, $values);

    }

?>
