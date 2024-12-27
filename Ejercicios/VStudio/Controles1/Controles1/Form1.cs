using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Controles1
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void etiqueta1_Click(object sender, EventArgs e)
        {

        }

        private void boton1_Click(object sender, EventArgs e)
        {
            string nombreSaludo;
            nombreSaludo = nombre.Text;
            etiqueta2.Text = "Hola " + nombreSaludo + " ¿Cómo estás?";
        }

        private void etiqueta2_Click(object sender, EventArgs e)
        {

        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {

        }

        private void A_Click(object sender, EventArgs e)
        {

        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void boton2_Click(object sender, EventArgs e)
        {
            int anioFinal;
            int anioUno = int.Parse(anio1.Text);
            int anioDos = int.Parse(anio2.Text);
            anioFinal = anioUno - anioDos;
            resultado2.Text = anioFinal.ToString();
        }

        private void boton31_Click(object sender, EventArgs e)
        {
            label3.Text ="Has pulsado el "+ boton31.Text;
        }

        private void boton32_Click(object sender, EventArgs e)
        {
            label3.Text = "Has pulsado el " + boton32.Text;
        }

        private void boton33_Click(object sender, EventArgs e)
        {
            label3.Text = "Has pulsado el " + boton33.Text;
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }
    }
}
