/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import org.junit.AfterClass;
import org.junit.BeforeClass;
import org.junit.Test;
import static org.junit.Assert.*;

/**
 *
 * @author Acer
 */
public class CarRentalFunctionsTest {
    
    public CarRentalFunctionsTest() {
    }
    
    @BeforeClass
    public static void setUpClass() {
    }
    
    @AfterClass
    public static void tearDownClass() {
    }

    /**
     * Test of loginCheck method, of class CarRentalFunctions.
     */
    @Test
    public void testLoginCheck() {
        System.out.println("loginCheck");
        String id = "safwan";
        String pass = "abcd";
        CarRentalFunctions instance = new CarRentalFunctions();
        String expResult = "pass";
        String result = instance.loginCheck(id, pass);
        assertEquals(expResult, result);

    }
    
     @Test
    public void testLoginCheck2() {
        System.out.println("loginCheck2");
        String id = "safwan";
        String pass = "1234";
        CarRentalFunctions instance = new CarRentalFunctions();
        String expResult = "fail";
        String result = instance.loginCheck(id, pass);
        assertEquals(expResult, result);

    }

     @Test
    public void testLoginCheck3() {
        System.out.println("loginCheck3");
        String id = "";
        String pass = "";
        CarRentalFunctions instance = new CarRentalFunctions();
        String expResult = "fail";
        String result = instance.loginCheck(id, pass);
        assertEquals(expResult, result);

    }
    
    /**
     * Test of adminLoginCheck method, of class CarRentalFunctions.
     */
    @Test
    public void testAdminLoginCheck() {
        System.out.println("adminLoginCheck");
        String id = "admin";
        String pass = "admin";
        CarRentalFunctions instance = new CarRentalFunctions();
        String expResult = "pass";
        String result = instance.adminLoginCheck(id, pass);
        assertEquals(expResult, result);

    }
    
    @Test
    public void testAdminLoginCheck2() {
        System.out.println("adminLoginCheck2");
        String id = "admin";
        String pass = "5555";
        CarRentalFunctions instance = new CarRentalFunctions();
        String expResult = "fail";
        String result = instance.adminLoginCheck(id, pass);
        assertEquals(expResult, result);

    }

    /**
     * Test of addCarCheck method, of class CarRentalFunctions.
     */
    
     @Test
    public void testAddCarCheck() {
        System.out.println("addCarCheck");
        String carName = "Corolla";
        String reg = "25-2644";
        String milage = "200";
        String fare = "500";
        CarRentalFunctions instance = new CarRentalFunctions();
        String expResult = "added";
        String result = instance.addCarCheck(carName, reg, milage, fare);
        assertEquals(expResult, result);

    }
    
    @Test
    public void testAddCarCheck2() {
        System.out.println("addCarCheck2");
        String carName = "Lancia";
        String reg = "23-7184";
        String milage = "10";
        String fare = "1000";
        CarRentalFunctions instance = new CarRentalFunctions();
        String expResult = "exists";
        String result = instance.addCarCheck(carName, reg, milage, fare);
        assertEquals(expResult, result);

    }
    
   

    /**
     * Test of bookingCheck method, of class CarRentalFunctions.
     */
    @Test
    public void testBookingCheck() {
        System.out.println("bookingCheck");
        String start = "Dhaka";
        String end = "Barishal";
        int days = 5;
        CarRentalFunctions instance = new CarRentalFunctions();
        String expResult = "booked";
        String result = instance.bookingCheck(start, end, days);
        assertEquals(expResult, result);
        
    }
    
    @Test
    public void testBookingCheck2() {
        System.out.println("bookingCheck2");
        String start = "";
        String end = "Barishal";
        int days = 5;
        CarRentalFunctions instance = new CarRentalFunctions();
        String expResult = "fail";
        String result = instance.bookingCheck(start, end, days);
        assertEquals(expResult, result);
        
    }
}
