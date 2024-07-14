package com.class3;

import org.w3c.dom.Document;
import org.w3c.dom.Element;
import org.w3c.dom.NodeList;

import javax.xml.parsers.DocumentBuilder;
import javax.xml.parsers.DocumentBuilderFactory;
import java.io.File;

public class MainClass {
    public static void main(String[] args) {
        try {
            File inputFile = new File("class.xml");
            DocumentBuilderFactory dbFactory = DocumentBuilderFactory.newInstance();
            DocumentBuilder dBuilder = dbFactory.newDocumentBuilder();
            Document doc = dBuilder.parse(inputFile);
            doc.getDocumentElement().normalize();

            System.out.println("Root Name " + doc.getDocumentElement().getNodeName());

            NodeList students = doc.getElementsByTagName("student");
            for (int i = 0; i < students.getLength(); i++) {
                Element student = (Element)students.item(i);
                System.out.println("----Student----");

                String value = student.getAttribute("id").toString();
                System.out.println(value);
                //Get Name
                NodeList firstnameList = student.getElementsByTagName("firstname");
                if(firstnameList != null) {
                    String firstname = firstnameList.item(0).getTextContent();
                    System.out.println("\tFirst Name: " + firstname);
                }

                NodeList lastnameList =student.getElementsByTagName("lastname");
                if(lastnameList != null) {
                    String lastname = lastnameList.item(0).getTextContent();
                    System.out.println("\tLast Name: " + lastname);
                }
                NodeList ageList =student.getElementsByTagName("age");
                if(ageList != null) {
                    String age = ageList.item(0).getTextContent();
                    System.out.println("\tAge: " + age);
                }
                NodeList earningList =student.getElementsByTagName("earnings");
                if(earningList != null) {
                    String earnings = earningList.item(0).getTextContent();
                    System.out.println("\tEarnings: " + earnings);
                }

            }
        }catch(Exception e) {
            System.out.println(e.getMessage());
        }
    }
}