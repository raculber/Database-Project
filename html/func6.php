<html>
<!--View all courses for a given student (given the StudentID, display all attributes in the Course table for each course)--> 
<body>
        <h3>Option 6 selected</h3><br>
        <form action="func6.php" onsubmit="return testForm()" method="post">
        <p>Enter Student ID below to view all courses for specific student</p>
        Student ID: <input type="text" name="studentId" id="studentId"><br>
        <input name="submit" type="submit" value="View courses for student">
        <p id="error"></p>
        <button type="button" onclick=main()>Main Menu</button>
        <p id="error"></p>
</body>
<script>
     function main() {
        window.location.replace("/~raculber/mainMenu.html");
    }
    function testForm() {
            if (document.getElementById("studentId").value < 0) {
                document.getElementById("error").innerHTML = "Error: Invalid ID"; 
                return false;
            }
            return true;
        }
</script>
</html>
<?php
   include('php_db.php');
   $studentId = $_POST[studentId];
if (isset($_POST['submit']))
{
   $myDb = new php_db('raculber','aib2Oi5L','raculber');
   $Enrollment = $myDb->query('SELECT * FROM Enrollment WHERE StudentId =' . $_POST[studentId]);  
   echo '<br>Viewing all courses for: '. $_POST[studentId];
   $myDb->printTable($Enrollment);
} 
?>