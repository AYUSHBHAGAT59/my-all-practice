import java.util.TreeSet;
public class treeset {
    public static void main(String abc[]){
        TreeSet<Integer> list = new TreeSet<>();

        // adding
        list.add(10);
        list.add(9);
        list.add(8);
        list.add(7);

        // polling
        list.pollFirst();
        list.pollLast();
        System.out.println(list);

    }
}
// in treeset is the only differnce is set in swquence
