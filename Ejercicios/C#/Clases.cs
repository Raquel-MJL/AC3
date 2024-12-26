using System;

namespace Ejercicios_Clases
{
    class Circulos
    {
        private const double PI = 3.141592653589793;

        // Propiedad del radio
        public double Radio { get; set; }

        // Constructor para crear un círculo con un radio específico
        public Circulos(double radio)
        {
            Radio = radio;
        }

      
        public void CalcularDiametro()
        {
            double diametro = 2 * Radio;
            Console.WriteLine("El diámetro de un círculo de radio" + Radio +"es " + diametro +"metros.");
        }

    
        public void CalcularCircunferencia()
        {
            double circunferencia = 2 * PI * Radio;
            Console.WriteLine("La circunferencia de un círculo de radio "+Radio +" es "+circunferencia +" metros.");
        }

        public void CalcularArea()
        {
            double area = PI * Radio * Radio;
            Console.WriteLine("El área de un círculo de radio "+Radio +" es "+area +" metros cuadrados.");
        }
    }

    class Program
    {
        static void Main(string[] args)
        {
            // Instancias de círculos con radios de 10, 20 y 50 metros
            Circulos circulo1 = new Circulos(10);
            Circulos circulo2 = new Circulos(20);
            Circulos circulo3 = new Circulos(50);

            // Ejecución de los métodos para los tres círculos
            Console.WriteLine("Círculo 1 (Radio 10 metros):");
            circulo1.CalcularDiametro();
            circulo1.CalcularCircunferencia();
            circulo1.CalcularArea();

            Console.WriteLine("\nCírculo 2 (Radio 20 metros):");
            circulo2.CalcularDiametro();
            circulo2.CalcularCircunferencia();
            circulo2.CalcularArea();

            Console.WriteLine("\nCírculo 3 (Radio 50 metros):");
            circulo3.CalcularDiametro();
            circulo3.CalcularCircunferencia();
            circulo3.CalcularArea();
        }
    }
}
