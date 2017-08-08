import java.util.Scanner;

public class p17_ChangeToUppercase {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String text = scanner.nextLine();

        int beginningTagIndex = text.indexOf("<upcase>");
        int endingTagIndex = text.indexOf("</upcase");

        while (beginningTagIndex >= 0 && endingTagIndex >= 0) {
            String textBetweenTags = text.substring(beginningTagIndex + 8, endingTagIndex);

            text = text.replaceFirst(textBetweenTags, textBetweenTags.toUpperCase());

            text = text.replaceFirst("<upcase>", "");
            text = text.replaceFirst("</upcase>", "");

            beginningTagIndex = text.indexOf("<upcase>");
            endingTagIndex = text.indexOf("</upcase");
        }

        System.out.println(text);
    }
}
