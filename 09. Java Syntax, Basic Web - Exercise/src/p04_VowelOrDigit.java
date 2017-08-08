import java.util.Scanner;

public class p04_VowelOrDigit {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        char symbol = scanner.nextLine().charAt(0);

        char[] vowels = {'a', 'e', 'o', 'u', 'i', 'A', 'O', 'I', 'U', 'E'};

        for (char vowel : vowels) {
            if (vowel == symbol) {
                System.out.println("vowel");
                return;
            }
        }

        char[] digits = {'0', '1', '2', '3', '4', '5', '6', '7', '8', '9'};

        for (char digit : digits) {
            if (digit == symbol) {
                System.out.println("digit");
                return;
            }
        }

        System.out.println("other");
    }
}
