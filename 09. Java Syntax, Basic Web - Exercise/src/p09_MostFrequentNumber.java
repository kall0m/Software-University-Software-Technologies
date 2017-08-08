import java.util.Arrays;
import java.util.Scanner;

public class p09_MostFrequentNumber {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int[] nums = Arrays.stream(scanner.nextLine().split(" ")).mapToInt(Integer::parseInt).toArray();

        int mostFreqNum = nums[0];
        int best = 0;
        int freq = 0;

        for (int i = 0; i < nums.length; i++) {
            freq = 0;

            for (int j = i + 1; j < nums.length; j++) {
                if (nums[i] == nums[j]) {
                    freq++;
                }
            }

            if (best < freq) {
                best = freq;
                mostFreqNum = nums[i];
            }
        }

        System.out.println(mostFreqNum);
    }
}
