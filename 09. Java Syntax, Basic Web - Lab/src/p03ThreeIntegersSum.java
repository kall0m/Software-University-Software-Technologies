import java.util.Scanner;

public class p03ThreeIntegersSum {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String[] input = scanner.nextLine().split("\\s+");

        int[] nums = new int[input.length];

        for (int i = 0; i < nums.length; i++) {
            nums[i] = Integer.parseInt(input[i]);
        }

        int num1 = nums[0];
        int num2 = nums[1];
        int num3 = nums[2];

        if(!checkIfSum(num1, num2, num3) && !checkIfSum(num2, num3, num1) && !checkIfSum(num1, num3, num2)){
            System.out.println("No");
        }
    }

    static boolean checkIfSum(int num1, int num2, int num3) {
        if(num1 + num2 != num3){
            return false;
        }

        int smallerNum = Math.min(num1, num2);
        int biggerNum = Math.max(num1, num2);

        System.out.printf("%d + %d = %d", smallerNum, biggerNum, num3);

        return true;
    }
}
