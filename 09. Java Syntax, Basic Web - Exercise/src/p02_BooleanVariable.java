import java.util.Scanner;

public class p02_BooleanVariable {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String bool = scanner.nextLine();

        boolean isTrue = Boolean.parseBoolean(bool);

        if (isTrue) {
            System.out.println("Yes");
        } else {
            System.out.println("No");
        }
    }
}
