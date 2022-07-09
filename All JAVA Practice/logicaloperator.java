public class logicaloperator{
    public static void main(String abc[]){
        int a = 50;
        int b = 70;

        if((a == b) && (b > a)){
            System.out.println("true");
        }else{
            System.out.println("false");
        }

        if((a > b) || (a != b)){
            System.out.println("true");
        }else{
            System.out.println("false");
        }

        // single AND OR operator

        // if((a == b)|(a < b)){
        //     System.out.println("SINGLE AND OPERATOR");
        // }

        // if((a == b)&(a < b)){
        //     System.out.println("SINGLE AND OPERATOR");
        // }
    }
}