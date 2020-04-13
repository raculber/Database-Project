<html>
<!--View all courses for a given student (given the StudentID, display all attributes in the Course table for each course)--> 
<body>
        <h3>Option 6 selected</h3><br>
        <form action="func4.html" method="post">
        <p>Enter Student ID below to view all courses for specific student</p>
        Student ID: <input type="text" name="studentid" id="studentid"><br>
        <button type="button" onclick=main()>Main Menu</button>
        <button type="button" onclick=main()>Other Menu</button>
        <p id="error"></p>
</body>
</html>
<?php
if (isset($_POST['submit']))
{
   echo ""  
}
?>