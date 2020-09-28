public class CarRentalFunctions {

    private static String userId[] = {"amlan", "safwan", "nibraj", "test", "amlan"};
    
    private static String password[] = {"amlan", "abcd", "0000", "1234", "nibu123"};
    
    private static String cars[] = {"Lancia", "Toyota GT-83", "hiace", "grey hiace", "mercedez benz"};
     
    private static String adminId="admin";
    private static String adminPass="admin";
    
    

    public String loginCheck(String id, String pass) {
        CarRentalFunctions H = new CarRentalFunctions();
        String uid=id;
        String upass=pass;
        String message="fail";
        for (int i = 0; i < H.userId.length ; i++) {
            if(H.userId[i].equals(uid)) {
                if (H.password[i].equals(upass)){
                    message = "pass";
                }else {
                message = "fail";
                }
            }
        }
        return message;
    }

    public String adminLoginCheck(String id, String pass) {
        CarRentalFunctions H = new CarRentalFunctions();
        String uid=id;
        String upass=pass;
        String message="fail";
            if(H.adminId.equals(uid) && H.adminPass.equals(upass)) {
                    message = "pass";
                }else {
                message = "fail";
            }
        return message;    
    }
       
    

    
    public String addCarCheck(String carName,String reg,String milage,String fare) {
        CarRentalFunctions H = new CarRentalFunctions();
        String cName=carName;
        String r=reg;
        String mil=milage;
        String f=fare;
        String message="added";
        for (int i = 0; i < H.cars.length ; i++) {
            if(H.cars[i].equals(cName)) {
                message = "exists";
            }
        }
        return message;
    }

    public String bookingCheck(String start,String end,int days) {
        
        String jStart=start;
        String jEnd=end;
        int day=days;
        String result="fail";
        if (jStart!="" && jEnd!="") 
            result = "booked";
        return result;
    }
}

