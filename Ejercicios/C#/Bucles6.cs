using System;

/*
class Program
{
    static void Main()
    {
        int[] numeros = new int[10];
        
        for (int i = 0; i < 10; i++)
        {
            Console.Write("Introduce el número " + (i + 1) + ": ");
            numeros[i] = int.Parse(Console.ReadLine());
        }

        int suma = 0;
        for (int i = 5; i < 10; i++)  
        {
            suma += numeros[i];
        }

        Console.WriteLine("La suma de los últimos 5 números es: " + suma);
    }
}
*/

//Ejercicio 2 


/*
class Program
{
    static void Main()
    {
        string claveCorrecta = "0494"; 
        string claveIntroducida;
        bool accesoPermitido = false;

        for (int intentos = 1; intentos <= 3; intentos++)
        {
            // Pedir al usuario que introduzca la clave
            Console.Write("Introduce la clave (intento " + intentos + " de 3): ");
            claveIntroducida = Console.ReadLine();

            if (claveIntroducida == claveCorrecta)
            {
                Console.WriteLine("Clave Correcta. Acceso Permitido");
                accesoPermitido = true;
                break;
            }
            else
            {
                Console.WriteLine("Clave Incorrecta. Intento fallido.");
            }
        }

        if (!accesoPermitido)
        {
            Console.WriteLine("Clave Incorrecta. Acceso Denegado.");
        }
    }
}

*/


class Program
{
    static void Main()
    {
        int contador = 1; 
        int numeroIntroducido;

        while (contador <= 5)
        {
            Console.Write("Introduzca un número: ");
            numeroIntroducido = int.Parse(Console.ReadLine()); //Convierto a INT lo introducido por el usuario

            if (numeroIntroducido < 10)
            {
                Console.WriteLine("El número introducido es el " + numeroIntroducido + " y el contador " + contador);
            }
            else
            {
                Console.WriteLine("Fin del programa");
                break; 
            }

            contador++; 
        }
    }
}
