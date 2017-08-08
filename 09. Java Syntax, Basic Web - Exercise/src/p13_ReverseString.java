import java.util.Scanner;

public class p13_ReverseString {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String string = scanner.nextLine();

        System.out.println(new StringBuilder(string).reverse());
    }
}
