import java.util.Arrays;
import java.util.Scanner;

public class p06Largest3Numbers {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int[] nums = Arrays.stream(scanner.nextLine().split(" ")).mapToInt(Integer::parseInt).sorted().toArray();

        int index = nums.length - 1;

        int count = 0;

        if(nums.length < 3){
            count = nums.length;
        }
        else{
            count = 3;
        }

        for (int i = 0; i < count; i++) {
            System.out.println(nums[index]);

            index--;
        }
    }
}
