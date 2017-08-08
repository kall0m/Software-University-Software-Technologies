import java.util.Scanner;

public class p15_CensorEmailAddress {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String email = scanner.nextLine();
        String text = scanner.nextLine();

        String username = email.split("@")[0];
        String domain = email.split("@")[1];

        StringBuilder rep = new StringBuilder();

        for (int i = 0; i < username.length(); i++) {
            rep.append('*');
        }

        rep.append("@" + domain);

        text = text.replaceAll(email, rep.toString());

        System.out.println(text);
    }
}
