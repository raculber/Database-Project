<html>
<!--Add an application to the Enrollment table--> 
    <body>
        <form action="/func3.php" onsubmit="return testForm()" method="GET">
            Student ID: <input type="text" name="id" id="id"><br>
            Department code: <input type="text" name="code" id="code"><br>
            Course number: <input type="text" name="courseNumber" id="courseNumber"><br>
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
<<<<<<< HEAD:func3.php

=======
if (isset($_POST['submit']))
{
    $id = escapeshellarg($_POST[id]);
    $code = escapeshellarg($_POST[code]);
    $number = escapeshellarg($_POST[number]);

    $command = 'java -cp .:mysql-connector-java-5.1.40-bin.jar jdbc_insert_student ' . $id . ' ' . $code . ' ' . $number;

    $command = escapeshellcmd($command);
    echo "<p>command: $command <p>";

    system($command);   
}
>>>>>>> f8180e22966435c94d6d8282aa02b302c097f2ea:html/func3.html
?>