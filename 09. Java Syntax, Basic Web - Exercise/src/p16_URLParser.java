import java.util.Scanner;

public class p16_URLParser {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        String url = scanner.nextLine();

        String protocol = "";
        String server = "";
        String resource = "";

        if (url.indexOf("://") >= 0) {
            int protocolEndIndex = url.indexOf("://");
            protocol = url.substring(0, protocolEndIndex);
            url = url.substring(protocolEndIndex + 3);
        }

        if (url.indexOf("/") >= 0) {
            int resourceStartIndex = url.indexOf("/");
            resource = url.substring(resourceStartIndex + 1);
            url = url.substring(0, resourceStartIndex);
        }

        server = url;

        System.out.println("[protocol] = \"" + protocol + "\"");
        System.out.println("[server] = \"" + server + "\"");
        System.out.println("[resource] = \"" + resource + "\"");
    }
}
