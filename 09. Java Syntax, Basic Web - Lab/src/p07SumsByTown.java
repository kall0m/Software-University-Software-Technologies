import java.util.Scanner;
import java.util.TreeMap;

public class p07SumsByTown {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int n = Integer.parseInt(scanner.nextLine());

        TreeMap<String, Double> incomeByTown = new TreeMap<>();

        for (int i = 0; i < n; i++) {
            String[] data = scanner.nextLine().split("\\|");

            String town = data[0].trim();
            double income = Double.parseDouble(data[1].trim());
            
            if(!incomeByTown.containsKey(town)){
                incomeByTown.put(town, 0.0);
            }

            incomeByTown.put(town, incomeByTown.get(town) + income);
        }

        for (String town : incomeByTown.keySet()) {
            System.out.println(town + " -> " + incomeByTown.get(town));
        }
    }
}
