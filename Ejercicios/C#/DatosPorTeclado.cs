//Ejercicio 1

using System;

class Program
{
    static void Main()
    {
        // Solicitar el nombre del usuario
        Console.Write("Ingrese su nombre: ");
        string nombre = Console.ReadLine();

        // Solicitar el correo electrónico del usuario
        Console.Write("Ingrese su correo electrónico: ");
        string correo = Console.ReadLine();

        // Mostrar los datos ingresados
        Console.WriteLine("\nDatos del usuario:");
        Console.WriteLine("Nombre: " + nombre);
        Console.WriteLine("Correo electrónico: " + correo);
    }
}


//Ejercicio 2
using System;

class Program
{
    static void Main()
    {
        // Solicitar el primer número
        Console.Write("Ingrese el primer número: ");
        string numero1 = Console.ReadLine();

        // Solicitar el segundo número
        Console.Write("Ingrese el segundo número: ");
        string numero2 = Console.ReadLine();

        // Mostrar los números concatenados
        Console.WriteLine("\nNúmeros concatenados: " + numero1 + numero2);

        // Convertir los números a enteros y mostrarlos sumados
        int suma = int.Parse(numero1) + int.Parse(numero2);
        Console.WriteLine("Suma de los números: " + suma);
    }
}

//Ejercicio 3
using System;

class Program
{
    static void Main()
    {
        // Solicitar el primer número
        Console.Write("Ingrese el primer número: ");
        double numero1 = double.Parse(Console.ReadLine());

        // Solicitar el segundo número
        Console.Write("Ingrese el segundo número: ");
        double numero2 = double.Parse(Console.ReadLine());

        // Solicitar el tercer número
        Console.Write("Ingrese el tercer número: ");
        double numero3 = double.Parse(Console.ReadLine());

        // Calcular la media aritmética
        double media = (numero1 + numero2 + numero3) / 3;

        // Mostrar el resultado de la media
        Console.WriteLine("\nLa media aritmética es: " + media);
    }
}