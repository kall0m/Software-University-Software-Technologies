import java.util.Arrays;
import java.util.Scanner;

public class p11_EqualSums {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int[] nums = Arrays.stream(scanner.nextLine().split(" ")).mapToInt(Integer::parseInt).toArray();

        for (int i = 0; i < nums.length; i++) {
            int leftSum = 0;
            int rightSum = 0;

            for (int j = i - 1; j >= 0; j--) {
                leftSum += nums[j];
            }

            for (int j = i + 1; j < nums.length; j++) {
                rightSum += nums[j];
            }

            if (leftSum == rightSum) {
                System.out.println(i);
                return;
            }
        }

        System.out.println("no");
    }
}
