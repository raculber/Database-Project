<html>
<!--View all courses from a given department (display all attributes in the Course table for each course)--> 
<body>
        <h3>Option 5 selected/h3><br>
        <form action="func5.php" method="post">
        <p>Enter department code below to view all courses in specific department</p>
        Department code: <input type="text" name="code" id="code"><br>
        <input name="submit" type="submit" value="View courses for department">
        </form>
</body>
</html>
<?php
include('php_db.php');

if (isset($_POST['submit']))
{
    echo '<br>Courses from given department<br>';
    //SELECT all from given department
    $DeptCode = $myDb->query("SELECT * FROM Student");
    $myDb->printTable($Student);  
}
?>