import java.sql.*;

public class jdbc_insert_student {
    public static void main (String[] args) throws SQLException {
        String Username = "raculber";
        String mysqlPassword = "aib2Oi5L";
        jdbc_db db = new jdbc_db();
        db.connect(Username, mysqlPassword);
        db.initDatabase();
        StringBuilder builder = new StringBuilder();
        String query1 = "SELECT * from Student";
        builder.append("<br> Table Student before:" + db.query(query1) + "<br>");  
        int id = 0;
        String name = "NAME";
        String major = "MAJOR";  
        id = Integer.parseInt(args[0]);
        name = args[1];
        major = args[2];
        String input = id + ",\'" + name + "\',\'" + major + "\'";
        db.insert("Student", input);
        builder.append("<br><br><br> Table Student after:" + db.query(query1));
        System.out.println(builder.toString());     
        db.disConnect();
    }
}