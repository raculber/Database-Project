<html>
<!--Add a student to the Student table--> 
    <body>
        <form action="/func1.php" onsubmit="return testForm()" method="post">
            Student's ID: <input type="text" name="id" id="id"><br>
            Student's Name: <input type="text" name="name" id="name"><br>
            Student's Major: <input type="text" name="major" id="major"><br>
            <input name="submit" type="submit">
        </form>
        <button type="button" onclick=main()>Main Menu</button>
        <p id="error"></p>
    </body>
    <script>
        function testForm() {
            return true;
        }
        function main() {
            window.location.replace("/~raculber/mainMenu.html");
        }
    </script>
</html>
<?php
if (isset($_POST['submit']))
{
    $id = escapeshellarg($_POST[id]);
    $name = escapeshellarg($_POST[name]);
    $major = escapeshellarg($_POST[major]);

    $command = 'java -cp .:mysql-connector-java-5.1.40-bin.jar jdbc_insert_student ' . $id . ' ' . $name . ' ' . $major;

    $command = escapeshellcmd($command);
    echo "<p>command: $command <p>";

    system($command);   
}
?>
