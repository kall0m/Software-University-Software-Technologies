import java.util.Scanner;

public class p03_ReverseCharacters {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        StringBuilder reversedCharArray = new StringBuilder();

        for (int i = 0; i < 3; i++) {
            char character = scanner.nextLine().charAt(0);

            reversedCharArray.append(character);
        }

        reversedCharArray.reverse();

        System.out.println(reversedCharArray);
    }
}
