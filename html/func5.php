<html>
<!--View all courses from a given department (display all attributes in the Course table for each course)--> 
<body>
        <h3>Option 5 selected/h3><br>
        <form action="func4.html" method="post">
        <p>Enter department code below to view all courses in specific department</p>
        Department code: <input type="text" name="code" id="code"><br>
        <input name="submit" type="submit" value="View all courses">
        </form>

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