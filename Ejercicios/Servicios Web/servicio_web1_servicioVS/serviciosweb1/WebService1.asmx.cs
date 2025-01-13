using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Services;

namespace serviciosweb1
{
    
    [WebService(Namespace = "http://tempuri.org/")]
    [WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]
    [System.ComponentModel.ToolboxItem(false)]
   
    public class ServicioWeb1 : System.Web.Services.WebService
    {
        // Ejercicio 1.

        [WebMethod]
        public string Alumno(string nombre, string apellido1, string apellido2)
        {
            return nombre + " " + apellido1 + " " + apellido2;
        }

        // Ejercicio 2.

        [WebMethod]
        public float CalcularMedia(float nota1, float nota2, float nota3)
        {
             float n1 = nota1;
             float n2 = nota2; 
             float n3 = nota3;
             float media = (n1 + n2 + n3) / 3;
             return media;
        /*
            return (nota1 + nota2 + nota3) / 3;
        */
        }


        // Ejercicio 3.


        [WebMethod]
        public float Subtotal(int cantidad, float precio)
        {
                         
             float st = cantidad * precio;
             return st;
            /*
                return cantidad * precio;
            */
        }

        [WebMethod]
        public float Total(int cantidad, float precio, int iva)
        {
            float sub = (cantidad * precio) + ((cantidad * precio) * iva )/ 100;
            return sub;
        /*
            return (cantidad * precio) + ((cantidad * precio) * iva )/ 100;  */
        }



    }
}
