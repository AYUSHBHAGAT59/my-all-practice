import java.util.ArrayList;
import java.util.Collections;
public class arraylistdemo {
    public static void main(String abc[]){
        ArrayList<String> list = new ArrayList<String>();
        // operation 1 : add
        list.add("ayush");
        list.add("bhagat");
        list.add("I'm");
        list.add("a Programmer");

        // // operation 2 : removing
        // list.remove("ayush");
        // list.remove(2);
        // list.add(2,"this is index 2");

        // // operation 3 : get
        // list.get(2);

        // // operation 4 : size
        // list.size();

        // // operation 5 : replacing
        // list.set(0,"new ayush bhagat");

        // // operation 6 : iterating or looping
        // for(int i = 0; i < list.size();i++){
        //     System.out.println(list.get(i));
        // }

        // // operation 7 : sorting
        Collections.sort(list);
        System.out.println(list);

        // System.out.println(list);
    }
}
