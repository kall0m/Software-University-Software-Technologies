import java.time.DayOfWeek;
import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.Arrays;
import java.util.Scanner;

public class p20_CountWorkingDays {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        DateTimeFormatter dateFormat = DateTimeFormatter.ofPattern("dd-MM-yyyy");

        LocalDate startDate = LocalDate.from(dateFormat.parse(scanner.nextLine()));
        LocalDate endDate = LocalDate.from(dateFormat.parse(scanner.nextLine()));

        LocalDate[] holidays = new LocalDate[]{
                LocalDate.of(4, 1, 1),
                LocalDate.of(4, 3, 3),
                LocalDate.of(4, 5, 1),
                LocalDate.of(4, 5, 6),
                LocalDate.of(4, 5, 24),
                LocalDate.of(4, 9, 6),
                LocalDate.of(4, 9, 22),
                LocalDate.of(4, 11, 1),
                LocalDate.of(4, 12, 24),
                LocalDate.of(4, 12, 25),
                LocalDate.of(4, 12, 26)
        };

        int workingDays = 0;

        for (LocalDate date = startDate; date.isBefore(endDate.plusDays(1)); date = date.plusDays(1)) {
            LocalDate finalDate = date;
            if (date.getDayOfWeek() != DayOfWeek.SATURDAY &&
                    date.getDayOfWeek() != DayOfWeek.SUNDAY &&
                    Arrays.stream(holidays).noneMatch(h -> h.getDayOfMonth() == finalDate.getDayOfMonth() && h.getMonth() == finalDate.getMonth())) {
                workingDays++;
            }
        }

        System.out.println(workingDays);
    }
}
