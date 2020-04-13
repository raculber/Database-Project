<html>
<!--Add a course to the Course table--> 
    <body>
<<<<<<< HEAD:func2.php
        <form action="/func2.php" onsubmit="return testForm()" method="post">
=======
        <form action="/func2.php" onsubmit="return testForm()" method="GET">
>>>>>>> f8180e22966435c94d6d8282aa02b302c097f2ea:html/func2.html
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
if (isset($_POST['submit']))
{
<<<<<<< HEAD:func2.php
    $deptCode = escapeshellarg($_POST[deptCode]);
    $courseNum = escapeshellarg($_POST[courseNum]);
    $title = escapeshellarg($_POST[title]);
    $creditHours = escapeshellarg($_POST[creditHours]);

    $command = 'java -cp .:mysql-connector-java-5.1.40-bin.jar jdbc_insert_course ' . $deptCode . ' ' . $courseNum . ' ' . $title . ' ' . $creditHours;
=======
    $code = escapeshellarg($_POST[code]);
    $number = escapeshellarg($_POST[number]);
    $title = escapeshellarg($_POST[title]);
    $hours = escapeshellarg($_POST[hours]);

    $command = 'java -cp .:mysql-connector-java-5.1.40-bin.jar jdbc_insert_student ' . $code . ' ' . $number . ' ' . $title . ' ' . $hours;
>>>>>>> f8180e22966435c94d6d8282aa02b302c097f2ea:html/func2.html

    $command = escapeshellcmd($command);
    echo "<p>command: $command <p>";

    system($command);   
}
?>
