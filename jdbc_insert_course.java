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
    }
}