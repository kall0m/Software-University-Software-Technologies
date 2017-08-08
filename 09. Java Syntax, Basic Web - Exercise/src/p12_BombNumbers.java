import java.util.Arrays;
import java.util.Scanner;
import java.util.stream.IntStream;

public class p12_BombNumbers {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int[] nums = Arrays.stream(scanner.nextLine().split(" ")).mapToInt(Integer::parseInt).toArray();

        int[] specialNums = Arrays.stream(scanner.nextLine().split(" ")).mapToInt(Integer::parseInt).toArray();

        int bombNum = specialNums[0];
        int power = specialNums[1];

        for (int i = 0; i < nums.length; i++) {
            if (nums[i] == bombNum) {
                for (int j = i - 1; j >= Math.max(i - power, 0); j--) {
                    nums[j] = 0;
                }

                for (int j = i + 1; j <= Math.min(i + power, nums.length - 1); j++) {
                    nums[j] = 0;
                }

                nums[i] = 0;
            }
        }

        System.out.println(IntStream.of(nums).sum());
    }
}
