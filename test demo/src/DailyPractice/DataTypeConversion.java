package DailyPractice;

public class DataTypeConversion{
	public static void main(String arg[]) {
		
		
	    // STORING LOWER VALUES IN LARGER CAPACITY VARAIBLE :
		
		System.out.println("STORING LOWER VALUES IN LARGER CAPACITY VARAIBLE :");
		System.out.println(" ");
		
		int i = 100;
		System.out.println(i);
		
		long l = i;
		System.out.println(l);
		
		float f = i;
		System.out.println(f);
		System.out.println(" ");
		
		// STORING DIG DATA VALUES IN SMALLE CAPACITY VARIABLES : 
        // THIS IS AN CALLED EXPLICIT DATA CONVERSION :

		System.out.println("STORING DIG DATA VALUES IN SMALLE CAPACITY VARIABLES");
		System.out.println("THIS IS AN CALLED EXPLICIT DATA CONVERSION :");
		System.out.println(" ");
		
		double d = 100.555;
		System.out.println(d);
		
		float f1 = (float) d;
		System.out.println(f1);
		
		long l1 = (long)d;
		System.out.println(l1);
		
		int i1 = (int)d;
		System.out.println(i1);
		
		byte b = (byte)d;
		System.out.println(b);
	}
}
