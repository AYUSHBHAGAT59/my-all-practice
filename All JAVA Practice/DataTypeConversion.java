public class DataTypeConversion {
    public static void main(String abc[]){
        int a = 50;
        System.out.println(a);

        long b = a;
        System.out.println(b);

        float f = b;
        System.out.println(f);

        // EXPLICIT DATA CONVERSION..........

        double d = 1000.525;
        System.out.println(d);

        float c = (float)d;
        System.out.println(c);

        long l = (long)d;
        System.out.println(l);

        int i = (int)d;
        System.out.println(i);

        byte b1 = (byte)d;
        System.out.println(b1);

        // COMPLETED.....................
    }
}
