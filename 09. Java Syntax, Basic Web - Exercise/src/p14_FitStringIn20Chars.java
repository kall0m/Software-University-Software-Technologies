import java.util.Scanner;

public class p14_FitStringIn20Chars {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String string = scanner.nextLine();

        if (string.length() < 20) {
            System.out.println(padRight(string, 20));
        } else {
            System.out.println(string.substring(0, 20));
        }
    }

    public static String padRight(String s, int n) {
        StringBuilder end = new StringBuilder();

        for (int i = 0; i < n - s.length(); i++) {
            end.append('*');
        }

        return s + end;
    }
}
