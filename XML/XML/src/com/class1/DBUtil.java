package com.class1;

import java.sql.Connection;
import java.sql.DriverManager;

public class DBUtil {
    public static Connection getConnection() throws Exception {
        Connection conn = null;
        try {
            Class.forName("com.mysql.jdbc.Driver");
            conn = DriverManager.getConnection("jdbc:mysql://localhost:8888/phpmyadmin/index.php?route=/database/sql&db=xml"
                    ,"root","");

            System.out.println("Connected");
        } catch (Exception e) {
            System.out.println(e.getMessage());
        }
        return conn;
    }
}