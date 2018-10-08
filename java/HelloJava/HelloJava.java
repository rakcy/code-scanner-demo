
import java.security.SecureRandom;

public class HelloJava {
    public static void main(String[] args) {
        SecureRandom sr = new SecureRandom();
        sr.setSeed(123456L);
        byte val[] = new byte[20];
        sr.nextBytes(val);
        System.out.println("val = " + val);
    }
}
