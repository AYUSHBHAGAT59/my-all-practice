public class TwoDArray {
    public static void main(String abc[]){
        // MEHTOD 1 : 

        // int arr[][];
        // arr = new int[3][3];

        // arr[0][0] = 100;
        // arr[0][1] = 102;
        // arr[0][2] = 103;

        // arr[1][0] = 200;
        // arr[1][1] = 201;
        // arr[1][2] = 202;

        // arr[2][0] = 300;
        // arr[2][1] = 301;
        // arr[2][2] = 303;

        // System.out.println(arr);
        // System.out.println(arr[2][0]);

        // for(int i = 0; i<arr.length; i++){
        //     System.out.println(arr[0][2]);
        // }

            // MEHTOD 2 : 
            int[][] arr = { {101,102,103,104,105},{106,107,108,109},{110,111,112,113} };
            System.out.println(arr);
            System.out.println(arr[2][2]);
            for(int i = 0; i < arr.length; i++){
                System.out.println(arr[i]);
            }
    }
}
