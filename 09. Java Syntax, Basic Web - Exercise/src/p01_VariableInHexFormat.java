import java.util.Scanner;

public class p01_VariableInHexFormat {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String hexNum = scanner.nextLine();

        int intNum = Integer.parseInt(hexNum, 16);

        System.out.println(intNum);
    }
}
