import java.sql.*;

public class jdbc_insert_course {
    public static void main (String[] args) throws SQLException {
        String Username = "raculber";
        String mysqlPassword = "aib2Oi5L";
        jdbc_db db = new jdbc_db();
        db.connect(Username, mysqlPassword);
        db.initDatabase();
        StringBuilder builder = new StringBuilder();
        String query1 = "SELECT * from Course";
        builder.append("<br> Table Course before:" + db.query(query1) + "<br>");  
        String deptCode = args[0];
        int courseNum = Integer.parseInt(args[1]);
        String title = args[2];
        int creditHours = Integer.parseInt(args[3]);
        String input = "\'" + deptCode + "\'," + courseNum + ",\'" + title + "\'," + creditHours;
        db.insert("Course", input);
        builder.append("<br><br><br> Table Course after:" + db.query(query1));
        System.out.println(builder.toString());     
        db.disConnect();
    }
}