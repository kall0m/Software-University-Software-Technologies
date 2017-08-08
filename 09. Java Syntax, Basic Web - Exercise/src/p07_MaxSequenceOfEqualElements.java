import java.util.Arrays;
import java.util.Scanner;

public class p07_MaxSequenceOfEqualElements {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int[] seq = Arrays.stream(scanner.nextLine().split(" ")).mapToInt(Integer::parseInt).toArray();

        int start = 0;
        int len = 1;
        int bestStart = start;
        int bestLen = len;

        for (int pos = 1; pos <= seq.length - 1; pos++) {
            if (seq[pos] == seq[pos - 1]) {
                len++;

                if (bestLen < len) {
                    bestStart = start;
                    bestLen = len;
                }
            } else {
                start = pos;
                len = 1;
            }
        }

        for (int i = bestStart; i < bestStart + bestLen; i++) {
            System.out.print(seq[i] + " ");
        }
    }
}