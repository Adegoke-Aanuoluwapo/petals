// See https://aka.ms/new-console-template for more information

using System;

namespace app
{
   class Program{
   
    public int StudentId{get; set;}
    public string Name { get; set;}
    public string Address { get; set;}
    public void showDetails()
    {
    Console.WriteLine("Student Information");
    Console.WriteLine("StudentId: (0), Name:(1), Address(2)",StudentId, Name, Address);
    }
   static void Main(string[] args)
   {
      Student st = new Student();
      st.StudentId =1;
      st.Name = "Agahaowa";
      st.Address = "Obalende CMS";
      st.showDetails();
      Console.ReadKey();
   }
}

}