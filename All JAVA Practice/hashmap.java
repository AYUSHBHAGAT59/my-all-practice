import java.util.HashMap;
public class hashmap {
    public static void main(String abc[]){
        HashMap<String,Integer> list = new HashMap<>();
        // putting
        list.put("ayush", 101);
        list.put("soni", 102);
        list.put("khushboo", 103);
        list.put("mummy", 104);
        list.put("papa", 105);

        // getting
        // list.get("papa");
        // System.out.println(list.get("papa"));
        
        // conatinskey
        System.out.println(list.containsKey("ayush bhagat")); //output : false

        // ALL OPERATION ARE SAME AS PREVIOUS ALL SET'S AND MAP'S
    }
}
