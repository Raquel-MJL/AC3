using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace servicioweb2
{
    public partial class WebForm1 : System.Web.UI.Page
    {
        sw1.ServicioWeb1 servicio1_cliente = new sw1.ServicioWeb1();
        protected void Page_Load(object sender, EventArgs e)
        {

        }
        /* Ejercicio 1.*/
        protected void Button1_Click(object sender, EventArgs e)
        {
            //sw1.ServicioWeb1 servicio1_cliente = new sw1.ServicioWeb1();
            string nom = t1.Text;
            string ape1 = t2.Text;
            string ape2 = t3.Text;
            t4.Text = servicio1_cliente.Alumno(nom, ape1, ape2);
        }

        protected void Button2_Click(object sender, EventArgs e)
        {

            //sw1.ServicioWeb1 servicio1_cliente = new sw1.ServicioWeb1();
            float n1 = float.Parse(t5.Text);
            float n2 = float.Parse(t6.Text);
            float n3 = float.Parse(t7.Text);
            t8.Text = Math.Round(servicio1_cliente.CalcularMedia(n1, n2, n3)).ToString();
        }

        protected void Button3_Click(object sender, EventArgs e)
        {
            //sw1.ServicioWeb1 servicio1_cliente = new sw1.ServicioWeb1();
            int cant = int.Parse(t9.Text);
            float precio = float.Parse(t10.Text);
            int iva = int.Parse(t11.Text);
            t12.Text = servicio1_cliente.Subtotal(cant, precio).ToString();
            t13.Text = servicio1_cliente.Total(cant, precio, iva).ToString();

        }
    }
}