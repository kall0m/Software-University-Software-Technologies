import java.util.LinkedHashMap;
import java.util.Scanner;

public class p18_Phonebook {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        LinkedHashMap<String, String> phonebook = new LinkedHashMap<>();

        String input = scanner.nextLine();

        while (!input.equals("END")) {
            String command = input.split(" ")[0];
            String name = input.split(" ")[1];

            switch (command) {
                case "A":
                    String phoneNumber = input.split(" ")[2];

                    phonebook.put(name, phoneNumber);

                    break;
                case "S":
                    if (phonebook.containsKey(name)) {
                        System.out.printf("%s -> %s%n", name, phonebook.get(name));
                    } else {
                        System.out.printf("Contact %s does not exist.%n", name);
                    }
                    break;
            }

            input = scanner.nextLine();
        }
    }
}
