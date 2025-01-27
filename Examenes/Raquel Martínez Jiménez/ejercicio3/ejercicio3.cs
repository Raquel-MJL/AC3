using System;

class Program
{
    static void Main()
    {
        MultiplicarNumeros();
    }

    static void MultiplicarNumeros()
    {
        int resultado = 1;
        bool hayNumerosMayoresQue10 = false;

        for (int i = 1; i <= 6; i++)
        {
            Console.Write("Introduce el número " + i + ": ");
            int numero = int.Parse(Console.ReadLine());

            if (numero > 10)
            {
                resultado *= numero;
                hayNumerosMayoresQue10 = true;
            }
        }

    
        if (hayNumerosMayoresQue10)
        {
            Console.WriteLine("El resultado de la multiplicación es: " + resultado);
        }
        else
        {
            Console.WriteLine("Sin resultado");
        }
    }
}
