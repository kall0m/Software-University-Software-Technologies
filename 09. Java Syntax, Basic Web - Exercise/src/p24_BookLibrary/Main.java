package p24_BookLibrary;

import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.ArrayList;
import java.util.Map;
import java.util.Scanner;
import java.util.TreeMap;
import java.util.stream.Collectors;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int bookCount = Integer.parseInt(scanner.nextLine());

        DateTimeFormatter dateFormat = DateTimeFormatter.ofPattern("dd.MM.yyyy");

        Library library = new Library("Prosveta", new ArrayList<>());

        for (int i = 0; i < bookCount; i++) {
            String[] input = scanner.nextLine().split(" ");

            String title = input[0];
            String author = input[1];
            String publisher = input[2];
            LocalDate releaseDate = LocalDate.parse(input[3], dateFormat);
            String isbn = input[4];
            double price = Double.parseDouble(input[5]);

            Book book = new Book(title, author, publisher, releaseDate, isbn, price);

            library.getBooks().add(book);
        }

//        1st Option - using Stream API

        library.getBooks().stream().collect(Collectors.groupingBy(Book::getAuthor, Collectors.summingDouble(Book::getPrice)))
                .entrySet()
                .stream()
                .sorted((a, b) -> {
                    int comparisonResult = Double.compare(b.getValue(), a.getValue());

                    if (comparisonResult == 0) {
                        return a.getKey().compareTo(b.getKey());
                    }

                    return comparisonResult;
                }).forEach((kvp) -> {
                    String author = kvp.getKey();
                    double sale = kvp.getValue();

                    System.out.printf("%s -> %.2f%n", author, sale);
                }
        );

//        2nd Option - using MapEntry

//        for (Map.Entry book : library.getBooks().stream().collect(Collectors.groupingBy(b -> b.getAuthor(), Collectors.summingDouble(Book::getPrice)))
//                .entrySet()
//                .stream()
//                .sorted((a, b) -> {
//                    int comparisonResult = Double.compare(b.getValue(), a.getValue());
//
//                    if (comparisonResult == 0) {
//                        return a.getKey().compareTo(b.getKey());
//                    }
//
//                    return comparisonResult;
//                }).toArray(Map.Entry[]::new)) {
//            System.out.printf("%s -> %.2f%n", book.getKey(), book.getValue());
//        }

//        3rd Option - using TreeMap

//        TreeMap<String, Double> authorSale = new TreeMap<>();
//
//        for (Book book : library.getBooks()) {
//            String author = book.getAuthor();
//            double sale = book.getPrice();
//
//            if (!authorSale.containsKey(author)) {
//                authorSale.put(author, (double) 0);
//            }
//
//            authorSale.put(author, authorSale.get(author) + sale);
//        }
//
//        for (String author : authorSale.keySet()
//                .stream()
//                .sorted((a, b) -> {
//                    int comparisonResult = authorSale.get(b).compareTo(authorSale.get(a));
//
//                    return comparisonResult;
//                }).toArray(String[]::new)) {
//            System.out.printf("%s -> %.2f%n", author, authorSale.get(author));
//        }
    }
}
