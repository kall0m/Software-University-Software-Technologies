import java.util.Scanner;

public class p05SymmetricNumbers {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String[] input = scanner.nextLine().split(" ");

        int num = Integer.parseInt(input[0]);

        for (int i = 1; i <= num; i++) {
            int reverse = Integer.parseInt(new StringBuilder(Integer.toString(i)).reverse().toString());

            if(i == reverse){
                System.out.println(i);
            }
        }
    }
}
