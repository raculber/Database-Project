<html>
<!--View all students (display all attributes in the table for each student)--> 
<body>
    <h3>Option 4 selected</h3><br>
    <form action="func4.php" method="post">
    <p>Click button below to view all students</p>
    <input name="submit" type="submit4" value="View Students">
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

if (isset($_POST['submit4']))
{
    //SELECT all from Student Table
    echo '<br>Viewing all students<br>';
    $Student = $myDb->query('SELECT StudentId, StudentName, Major FROM Student'); 
    $myDb->printTable($Student);
}
?>