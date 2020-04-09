<html>
    <body>
        <form action="/func3.php" onsubmit="return testForm()" method="GET">
            Student ID: <input type="text" name="id" id="id"><br>
            Department code: <input type="text" name="code" id="code"><br>
            Course number: <input type="text" name="courseNumber" id="courseNumber"><br>
            <input type="submit" value="Submit">
        </form>
        <button type="button" onclick=main()>Main Menu</button>
        <p id="error"></p>
    </body>
    <script>
        function testForm() {
            return true;
        }
        function main() {
            window.location.replace("/mainMenu.html");
        }
    </script>
</html>
<?php

?>