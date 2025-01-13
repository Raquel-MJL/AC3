using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace servicio_web0_clienteVS
{
    public partial class WebForm0 : System.Web.UI.Page
    {
        ws0.WebService1 servicios0 = new ws0.WebService1();
        protected void Page_Load(object sender, EventArgs e)
        {

        }
        /* Ejercicio 1.*/
        protected void b1_Click(object sender, EventArgs e)
        {
            //ws0.Webservice1 servicios0 = new ws0.Webservice1();
            string texto = t1.Text;
            t2.Text = servicios0.CantidadCaracteres(texto).ToString();
        }

        protected void b2_Click(object sender, EventArgs e)
        {

            //ws0.Webservice1 servicios0 = new ws0.Webservice1();
            int n1 = int.Parse(t3.Text);
            int n2 = int.Parse(t4.Text);
            t5.Text = servicios0.CalcularPotencia(n1, n2).ToString();
        }
    }
}