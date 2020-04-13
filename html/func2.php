<html>
<!--Add a course to the Course table--> 
    <body>
        <form action="/func2.php" onsubmit="return testForm()" method="GET">
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
            window.location.replace("/Users/rculb/Desktop/hw5/html/mainMenu.html");
        }
    </script>
</html>
<?php
if (isset($_POST['submit']))
{
    $code = escapeshellarg($_POST[code]);
    $number = escapeshellarg($_POST[number]);
    $title = escapeshellarg($_POST[title]);
    $hours = escapeshellarg($_POST[hours]);

    $command = 'java -cp .:mysql-connector-java-5.1.40-bin.jar jdbc_insert_student ' . $code . ' ' . $number . ' ' . $title . ' ' . $hours;

    $command = escapeshellcmd($command);
    echo "<p>command: $command <p>";

    system($command);   
}
?>
