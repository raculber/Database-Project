<html>
<!--View all courses for a given student (given the StudentID, display all attributes in the Course table for each course)--> 
<body>
        <h3>Option 6 selected</h3><br>
        <form action="func6.php" method="post">
        <p>Enter Student ID below to view all courses for specific student</p>
        Student ID: <input type="text" name="studentid" id="studentid"><br>
        <input name="submit" type="submit" value="View courses for student">
        <p id="error"></p>
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

if (isset($_POST['submit']))
{
    echo '<br>Viewing all courses for given student<br>';
    //SELECT all from Student Table
    $Student = $myDb->query("SELECT * FROM Student");
    $myDb->printTable($Student);  
}
?>