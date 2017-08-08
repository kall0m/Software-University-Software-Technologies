package p22_IntersectionOfCircles;

import java.util.Arrays;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        Circle circle1 = ReadCircle(scanner);
        Circle circle2 = ReadCircle(scanner);

        System.out.println(areIntersect(circle1, circle2) ? "Yes" : "No");
    }

    static boolean areIntersect(Circle circle1, Circle circle2) {
        double distanceBetweenCenters = CalcDist(circle1.getCenter(), circle2.getCenter());

        return distanceBetweenCenters <= circle1.getRadius() + circle2.getRadius();
    }

    static double CalcDist(Point c1, Point c2) {
        double a = c1.getX() - c2.getX();
        double b = c1.getY() - c2.getY();

        return Math.sqrt(Math.pow(a, 2) + Math.pow(b, 2));
    }

    static Circle ReadCircle(Scanner scanner) {
        double[] input = Arrays.stream(scanner.nextLine().split(" ")).mapToDouble(Double::parseDouble).toArray();

        return new Circle(ReadPoint(input[0], input[1]), input[2]);
    }

    static Point ReadPoint(double x, double y) {
        return new Point(x, y);
    }
}
