package p25_BookLibraryModification;

import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.ArrayList;
import java.util.Scanner;

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

        LocalDate date = LocalDate.parse(scanner.nextLine(), dateFormat);

        for (Book book : library.getBooks().stream().filter(b -> b.getReleaseDate().isAfter(date)).sorted((a, b) -> {
            int comparisonResult = a.getReleaseDate().compareTo(b.getReleaseDate());

            if (comparisonResult == 0) {
                return a.getTitle().compareTo(b.getTitle());
            }

            return comparisonResult;
        }).toArray(Book[]::new)) {
            System.out.printf("%s -> %s%n", book.getTitle(), dateFormat.format(book.getReleaseDate()));
        }
    }
}
