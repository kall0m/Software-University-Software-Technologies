import java.util.Scanner;
import java.util.TreeMap;

public class p19_PhonebookUpgrade {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        TreeMap<String, String> phonebook = new TreeMap<>();

        String input = scanner.nextLine();

        while (!input.equals("END")) {
            String command = input.split(" ")[0];
            String name = "";
            if (!input.equals("ListAll")) {
                name = input.split(" ")[1];
            }

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
                case "ListAll":
                    for (String contact : phonebook.keySet()) {
                        System.out.printf("%s -> %s%n", contact, phonebook.get(contact));
                    }
                    break;
            }

            input = scanner.nextLine();
        }
    }
}
