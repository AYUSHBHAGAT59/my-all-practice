public class ThreeDArray {
    public static void main(String abc[]){
        // METHOD 1 : 
        // int[][][] arr = { {  {101,102,103,104,105},{106,107,108,109,110}  },{  {111,112,113,114,115},{116,117,118,119,120}   }   };
        // System.out.print(arr[1][0][0]);

        // METHOD 2 :
        int arr[][][];
        arr = new int[3][3][3];
        arr[0][0][0] = 101;
        arr[0][1][1] = 102;
        arr[0][2][2] = 103;

        arr[1][0][0] = 201;
        arr[1][1][1] = 202;
        arr[1][2][2] = 203;

        arr[2][0][0] = 301;
        arr[2][1][1] = 302;
        arr[2][2][2] = 303;
        System.out.println(arr[1][0][0]);
    }
}
