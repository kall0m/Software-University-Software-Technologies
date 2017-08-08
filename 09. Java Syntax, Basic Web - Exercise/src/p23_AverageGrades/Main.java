package p23_AverageGrades;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int numberOfStudents = Integer.parseInt(scanner.nextLine());

        List<Student> students = new ArrayList<>();

        for (int i = 0; i < numberOfStudents; i++) {
            String[] input = scanner.nextLine().split(" ");

            String name = input[0];
            Double[] grades = Arrays.stream(input).skip(1).map(Double::parseDouble).toArray(Double[]::new);

            Student student = new Student() {{
                setName(name);
                setGrades(Arrays.asList(grades));
            }};

            students.add(student);
        }

        Student[] filteredStudents = students.stream()
                .filter(s -> s.getAverageGrade() >= 5.00)
                .sorted((a, b) -> {
                    int comparisonResult = a.getName().compareTo(b.getName());

                    if (comparisonResult == 0) {
                        return Double.compare(b.getAverageGrade(), a.getAverageGrade());
                    }

                    return comparisonResult;
                })
                .toArray(Student[]::new);

        for (Student student : filteredStudents) {
            System.out.printf("%s -> %.2f%n", student.getName(), student.getAverageGrade());
        }
    }
}
