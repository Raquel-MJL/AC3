using System;

class Program
{
    static void Main()
    {
        int totalPersonas = 0;
        int totalHombres = 0;
        int totalMujeres = 0;
        int totalHombresEdadLaboral = 0;
        int totalMujeresEdadLaboral = 0;
        
        int dni;
        int edad;
        string sexo;
        
        do
        {
            // Solicitar el número de DNI
            Console.Write("Introduce el número de DNI (0 para terminar): ");
            dni = int.Parse(Console.ReadLine());  

            // Si el DNI es 0, salimos del bucle
            if (dni == 0) break;

            // Solicitar la edad
            Console.Write("Introduce la edad: ");
            edad = int.Parse(Console.ReadLine());

            // Solicitar el sexo
            Console.Write("Introduce el sexo (m para masculino, f para femenino): ");
            sexo = Console.ReadLine().ToLower();

            // Contabilizamos el total de personas
            totalPersonas++;

            // Contabilizamos hombres y mujeres
            if (sexo == "m")
            {
                totalHombres++;
                if (edad >= 18 && edad <= 65)
                {
                    totalHombresEdadLaboral++;
                }
            }
            else if (sexo == "f")
            {
                totalMujeres++;
                if (edad >= 18 && edad <= 65)
                {
                    totalMujeresEdadLaboral++;
                }
            }

        } while (dni != 0);  // El bucle se repite hasta que se ingrese un 0 como DNI

        Console.WriteLine("\nResultados del censo:");
        Console.WriteLine("Total de personas censadas: " + totalPersonas);
        Console.WriteLine("Total de hombres: " + totalHombres);
        Console.WriteLine("Total de mujeres: " + totalMujeres);
        Console.WriteLine("Total de hombres en edad laboral: " + totalHombresEdadLaboral);
        Console.WriteLine("Total de mujeres en edad laboral: " + totalMujeresEdadLaboral);
    }
}
