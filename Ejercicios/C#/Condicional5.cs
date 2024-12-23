//CondicionalAnidado
using System;

class Program
{
    static void Main()
    {
        // Solicitar las tres notas
        Console.Write("Ingrese la primera nota: ");
        int nota1 = int.Parse(Console.ReadLine());

        Console.Write("Ingrese la segunda nota: ");
        int nota2 = int.Parse(Console.ReadLine());

        Console.Write("Ingrese la tercera nota: ");
        int nota3 = int.Parse(Console.ReadLine());

        // Calcular la media aritmética
        double media = (nota1 + nota2 + nota3) / 3.0;

        // Redondear la media
        int notaRedondeada = (int)Math.Round(media);

        // Mostrar la nota textual usando if...else if
        if (notaRedondeada == 10 || notaRedondeada == 9)
        {
            Console.WriteLine("Sobresaliente");
        }
        else if (notaRedondeada == 8 || notaRedondeada == 7)
        {
            Console.WriteLine("Notable");
        }
        else if (notaRedondeada == 6)
        {
            Console.WriteLine("Bien");
        }
        else if (notaRedondeada == 5)
        {
            Console.WriteLine("Suficiente");
        }
        else if (notaRedondeada >= 0 && notaRedondeada <= 4)
        {
            Console.WriteLine("Suspenso");
        }
        else
        {
            Console.WriteLine("El alumno no ha realizado los exámenes");
        }
    }
}

//Switch-case 

using System;

class Program
{
    static void Main()
    {
        // Solicitar las tres notas
        Console.Write("Ingrese la primera nota: ");
        int nota1 = int.Parse(Console.ReadLine());

        Console.Write("Ingrese la segunda nota: ");
        int nota2 = int.Parse(Console.ReadLine());

        Console.Write("Ingrese la tercera nota: ");
        int nota3 = int.Parse(Console.ReadLine());

        // Calcular la media aritmética
        double media = (nota1 + nota2 + nota3) / 3.0;

        // Redondear la media
        int notaRedondeada = (int)Math.Round(media);

        // Mostrar la nota textual usando switch...case
        switch (notaRedondeada)
        {
            case 10:
            case 9:
                Console.WriteLine("Sobresaliente");
                break;
            case 8:
            case 7:
                Console.WriteLine("Notable");
                break;
            case 6:
                Console.WriteLine("Bien");
                break;
            case 5:
                Console.WriteLine("Suficiente");
                break;
            case 4:
            case 3:
            case 2:
            case 1:
            case 0:
                Console.WriteLine("Suspenso");
                break;
            default:
                Console.WriteLine("El alumno no ha realizado los exámenes");
                break;
        }
    }
}
