<html>
<!--View all students (display all attributes in the table for each student)--> 
<body>
    <h3>Option 4 selected</h3><br>
    <form action="func4.html" method="post">
    <p>Click button below to view all students</p>
    <input name="submit" type="submit" value="View Students">
    </form>

        <button type="button" onclick=main()>Main Menu</button>
        <button type="button" onclick=main()>Other Menu</button>
        <p id="error"></p>
</body>
<?php
include('php_db.php');

if (isset($_POST['submit']))
{
    echo '<br>Table Student<br>';
    //SELECT all from Student Table
    $Student = $myDb->query("SELECT * FROM Student");
    $myDb->printTable($Student);  
}
?>
</html>