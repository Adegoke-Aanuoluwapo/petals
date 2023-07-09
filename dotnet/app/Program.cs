// See https://aka.ms/new-console-template for more information

using System;

namespace app
{
  class Program{
   static void Main(string[] args)
   {
   Console.WriteLine("Hello, World!");
   Console.WriteLine("Started Learning C#!");
   Console.WriteLine(3 + 4);
   Console.WriteLine("23*24");
   Console.WriteLine(23*24);
   string name = "Ajayi";
   Console.WriteLine(name);
   int myNumero = 444;
   Console.WriteLine(myNumero);
   Console.WriteLine("Hello " + name);
   string firstName = "Johnson ";
   string lastName = "Bright";
   string Fullname = firstName + lastName;
   Console.WriteLine(Fullname);
   string message = "C#";
   message += "string";
   Console.WriteLine(message);
   string nessage = "Adebimpe";
   Console.WriteLine(nessage.Length);
   string condition = "sunny";
   bool free = true;


   if(free & condition =="sunny")
   {
    Console.WriteLine("Let's go outside");
   }
   else
   {
    Console.WriteLine("Just stay home.");
   }
   void SayHi(string name){
    Console.WriteLine($"Hello {name}");
   }
   SayHi("Ajike");
   }
  }
}