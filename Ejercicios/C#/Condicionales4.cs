using System;

class Program
{
    static void Main()
    {
        // Solicitar el sueldo del trabajador
        Console.Write("Ingrese el sueldo del trabajador: ");
        double sueldo = double.Parse(Console.ReadLine());

        // Solicitar los años de antigüedad del trabajador
        Console.Write("Ingrese los años de antigüedad del trabajador: ");
        int antiguedad = int.Parse(Console.ReadLine());

        // Calcular el sueldo final basado en las condiciones
        if (sueldo < 1200.00)
        {
            if (antiguedad >= 10)
            {
                sueldo *= 1.10; // Aumento del 10%
                Console.WriteLine("\nEl sueldo incrementado con un 10% por antigüedad es: " + sueldo + " euros.");
            }
            else
            {
                sueldo *= 1.05; // Aumento del 5%
                Console.WriteLine("\nEl sueldo incrementado con un 5% por antigüedad es: " + sueldo + " euros.");
            }
        }
        else
        {
            Console.WriteLine("\nEl sueldo del trabajador se mantiene sin cambios: " + sueldo + " euros.");
        }
    }
}

//Ejercicio 2
using System;

class Program
{
    static void Main()
    {
        // Solicitar día, mes y año
        Console.Write("Ingrese el día: ");
        int dia = int.Parse(Console.ReadLine());

        Console.Write("Ingrese el mes: ");
        int mes = int.Parse(Console.ReadLine());

        Console.Write("Ingrese el año: ");
        int año = int.Parse(Console.ReadLine());

        // Evaluar la fecha
        if (mes == 12 && dia >= 26 && dia <= 31)
        {
            Console.WriteLine("\nLa Navidad ya pasó.");
        }
        else if (mes == 12 && dia == 25)
        {
            Console.WriteLine("\nEs Navidad.");
        }
        else
        {
            Console.WriteLine("\nTodavía no es Navidad.");
        }
    }
}
