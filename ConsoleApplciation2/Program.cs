// See https://aka.ms/new-console-template for more information

using System;
using System.Linq;

namespace MyApplication
{
 
public class HelloWorld
{
  static void MyMethod(string fname, int age)
  {
   Console.WriteLine(fname + " is " + age);
  }
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
  string[] cars = { "Volvo", "BMW", "Ford", "Mazda" };

  Console.WriteLine(cars[3]);
  for (int i =0; i < cars.Length; i++)
  {
    Console.WriteLine(cars[i]);
  }
 
  Array.Sort(cars);
  foreach(string i in cars)
  {
    Console.WriteLine(i);
  }
   int[] myNumbers = { 5, 1, 8, 9 };
   Console.WriteLine(myNumbers.Max());  // returns the largest value
   Console.WriteLine(myNumbers.Min());  // returns the smallest value
   Console.WriteLine(myNumbers.Sum());
   int[,] numbers = { { 1, 4, 2 }, { 3, 6, 8 } };

   Console.WriteLine(numbers[0, 2]);  // Outputs 2
   Console.WriteLine(numbers[1, 1]);  // Outputs 6
   numbers[0, 0] = 5;
   Console.WriteLine(numbers[0, 0]);
   foreach (string i in cars)
   {
    Console.WriteLine(i);
   }
   foreach (int i in numbers)
   {
    Console.WriteLine(i);
   }
   for (int i = 0; i < numbers.GetLength(0); i++)
   {
    for (int j = 0; j < numbers.GetLength(1); j++)
    {
     Console.WriteLine(numbers[i, j]);
    }
   }
   MyMethod("Liam", 23);
   MyMethod("Jenny", 45);
   MyMethod("Anja", 15);
  }
}
}