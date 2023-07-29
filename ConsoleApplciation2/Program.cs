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
        Console.WriteLine(phrase[3]);

 }
}
