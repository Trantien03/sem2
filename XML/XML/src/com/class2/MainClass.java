package com.class2;

import org.w3c.dom.Document;
import org.w3c.dom.Element;
import org.w3c.dom.NodeList;

import javax.xml.parsers.DocumentBuilder;
import javax.xml.parsers.DocumentBuilderFactory;
import java.io.File;

public class MainClass {
    public static void main(String[] args) {
        try {
            File inputFile = new File("book.xml");
            DocumentBuilderFactory dbFactory = DocumentBuilderFactory.newInstance();
            DocumentBuilder dBuilder = dbFactory.newDocumentBuilder();
            Document doc = dBuilder.parse(inputFile);
            doc.getDocumentElement().normalize();

            System.out.println("Book title " + doc.getDocumentElement().getNodeName());

            NodeList books = doc.getElementsByTagName("book");
            for (int i = 0; i < books.getLength(); i++) {
                Element book = (Element) books.item(i);
                System.out.println("----Book----");
                //Get Book
                NodeList titleList = book.getElementsByTagName("title");
                if(titleList != null) {
                    String title = titleList.item(0).getTextContent();
                    System.out.println("\tTitle: " + title);
                }
                NodeList authorList = book.getElementsByTagName("author");
                if(authorList != null) {
                    String author = authorList.item(0).getTextContent();
                    System.out.println("\tAuthor: " + author);
                }


//                NodeList yearsList = book.getElementsByTagName("years");
//                if(yearsList != null) {
//                    String year = yearsList.item(0).getTextContent();
//                    System.out.println("\tYears: " + year);
//                }
                NodeList priceList = book.getElementsByTagName("price");
                if(priceList != null) {
                    String price = priceList.item(0).getTextContent();
                    System.out.println("\tPrice: " + price);
                }
            }
        } catch(Exception e) {
            System.out.println(e.getMessage());
        }
    }
}


