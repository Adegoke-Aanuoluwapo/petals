// See https://aka.ms/new-console-template for more information

using System;
 
public class HelloWorld
{
    public static void Main(string[] args)
    {   
        string phrase = "Giraffe Academy";
        //char grade = 'A';
        //int age = 30;
        //bool isMale = false;
        //double gpa = 3.3;
        Console.WriteLine(phrase.ToUpper());
        Console.WriteLine(phrase.ToLower());
        Console.WriteLine(phrase.Contains("Academy"));
        Console.WriteLine(phrase.Substring(8));
        Console.WriteLine(phrase.Substring(8,3));
        Console.WriteLine( 5 / 2.0);
        if(20 > 18)
        {
            Console.WriteLine("20 is greater than 18");
        }
        int x = 20;
        int y = 18;
        if(x > y)
        {
            Console.WriteLine("y is greater than x");
        }
        int time = 20;
        if (time < 18)
        {
            Console.WriteLine("Good Day");  
        }
        else
        {
            Console.WriteLine("Good Morning"); 
        }

 }
}
