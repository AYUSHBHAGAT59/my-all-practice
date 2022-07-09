import java.util.LinkedList;
import java.util.Collections;

public class linkedlist {
    public static void main(String abc[]) {
        LinkedList<Integer> list = new LinkedList<Integer>();

        // operation 1 : add
        list.add(0);
        list.add(1);
        list.add(2);
        list.add(3);

        // operation 2 : addfirst , last
        list.addFirst(100);
        list.addLast(200);

        // operation 3 : removing
        list.remove(0);
        list.removeLast();

        // operation 4 : add between
        list.add(0, 100);

        // operation 5 : get
        list.get(2);

        // operation 6 : size
        // list.size();
        System.out.println(list.size());

        // opearation 7 : set
        list.set(0, 1000);
        System.out.println(list);

        // operation 8 : iterating / loop
        for (int i = 0; i < list.size(); i++) {
            System.out.println(list.get(i));
        }

        // operation 9 : sorting
        Collections.sort(list);
        System.out.println(list);
    }
}