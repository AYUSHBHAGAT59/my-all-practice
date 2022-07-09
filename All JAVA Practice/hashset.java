import java.util.HashSet;
public class hashset {
    public static void main(String abc[]){
        HashSet<String> list = new HashSet<>();

        // adding
        list.add("ayush bhagat");
        list.add("ayush bhagat");
        list.add("bhagat");

        // removing
        list.remove("bhagat");

        // upadating list
        list.add("im a programmer"+list);
        
        // colning
        list.clone();

        // removing all
        list.removeAll(list);
        System.out.println(list);
        // HASHSET IS DIFFERENT AS IT NOT STORE SAME VALUE IT SHOW'S ONE TIME ONLY
    }
}
