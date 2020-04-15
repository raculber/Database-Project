<html>
<!--View all courses from a given department (display all attributes in the Course table for each course)--> 
<body>
        <h3>Option 5 selected</h3><br>
        <form action="func5.php" method="post">
        <p>Enter department code below to view all courses in specific department</p>
        Department code: <input type="text" name="DeptCode" id="DeptCode"><br>
        <input name="submit" type="submit" value="View courses for department">
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
function DeptForm()
{
        echo "<h2>Department Code: " . $_POST[DeptCode] . "</h2></br>";
}
if (isset($_POST['submit']))
{
   DeptForm();
   $Course = $myDb->query('SELECT DeptCode, CourseNum, Title, CreditHours FROM Course'); 
   $myDb->printTable($Course);
}
?>