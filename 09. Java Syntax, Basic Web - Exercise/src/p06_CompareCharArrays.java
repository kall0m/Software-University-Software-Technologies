import java.util.ArrayList;
import java.util.Arrays;
import java.util.Scanner;

public class p06_CompareCharArrays {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        char[] arr1 = scanner.nextLine().replaceAll(" ", "").toCharArray();
        char[] arr2 = scanner.nextLine().replaceAll(" ", "").toCharArray();

        int smallerArrLength = Math.min(arr1.length, arr2.length);

        for (int i = 0; i < smallerArrLength; i++) {
            if (arr1[i] < arr2[i]) {
                System.out.println(new String(arr1));
                System.out.println(new String(arr2));
                return;
            } else if (arr1[i] > arr2[i]) {
                System.out.println(new String(arr2));
                System.out.println(new String(arr1));
                return;
            }
        }

        if (arr1.length > arr2.length) {
            System.out.println(new String(arr2));
            System.out.println(new String(arr1));
        } else {
            System.out.println(new String(arr1));
            System.out.println(new String(arr2));
        }
    }
}
