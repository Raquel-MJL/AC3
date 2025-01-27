using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace ejercicio4
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

        private void opcion4_CheckedChanged(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
           
            double cifra = Convert.ToDouble(euros.Text);

            double factorConversion = 1;

            
            if (opcion1.Checked) 
            {
                factorConversion = 1.05; 
            }
            else if (opcion2.Checked) 
            {
                factorConversion = 0.83;
            }
            else if (opcion3.Checked) 
            {
                factorConversion = 141.43;
            }
            else if (opcion4.Checked) 
            {
                factorConversion = 7.03;
            }

            
            double resultado = cifra * factorConversion;

            
            conversion.Text = resultado.ToString("F2"); 

        }
    }
}
