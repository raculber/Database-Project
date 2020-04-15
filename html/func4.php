<html>
<!--View all students (display all attributes in the table for each student)--> 
<body>
    <h3>Option 4 selected</h3><br>
    <form action="func4.php" method="post">
    <p>Click button below to view all students</p>
    <input name="submit" type="submit" value="View Students">
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
if (isset($_POST['submit']))
{
    $myDb = new php_db('raculber','aib2Oi5L','raculber');

    //SELECT all from Student Table
    $Student = $myDb->query('SELECT StudentId, StudentName, Major FROM Student');
    echo '<br>Viewing all students<br>'; 
    $myDb->printTable($Student);
}
?>