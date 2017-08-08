import java.util.Scanner;

public class p10_IndexOfLetters {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        char[] alphabet = {'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'};

        String word = scanner.nextLine();

        for (int i = 0; i < word.length(); i++) {
            System.out.println(word.charAt(i) + " -> " + new String(alphabet).indexOf(word.charAt(i)));
        }
    }
}
