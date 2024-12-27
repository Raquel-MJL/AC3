using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace prueba1
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {

        }

        private void boton1_Click(object sender, EventArgs e)
        {
            /*string nombre = cuadro1.Text;
            cuadro2.Text = "Hola " + nombre + " ¿Qué tal?";
            MessageBox.Show("Hola " + nombre + " que tengas buen día");*/
            int a, b, c;
            a = int.Parse(cuadro1.Text);
            b = int.Parse(cuadro2.Text);
            c = a + b;
            MessageBox.Show("Resultado de la suma: " + c);

        }

        private void cuadro2_TextChanged(object sender, EventArgs e)
        {

        }

        private void radioButton1_CheckedChanged(object sender, EventArgs e)
        {

        }

        private void radioButton1_CheckedChanged_1(object sender, EventArgs e)
        {

        }

        private void boton2_Click(object sender, EventArgs e)
        {
            if (radio1.Checked)
            {
                cuadro3.Text = "Soltero";
            }
            if (radio2.Checked)
            {
                cuadro3.Text = "Casado";
            }
            if (radio3.Checked)
            {
                cuadro3.Text = "Viudo/a";
            }

        }
    }
}
