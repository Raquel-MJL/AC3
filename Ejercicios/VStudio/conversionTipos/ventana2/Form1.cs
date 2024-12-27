namespace ventana2
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        /* 
        //Botón con evento y Textos.
            private void b1_Click(object sender, EventArgs e)
            {

                // Textos concatenados.
                    string texto1 = t1.Text;
                    string texto2 = t2.Text;
                    t3.Text = texto1+" "+texto2;
                // Textos concatenados en ventana emergente.
                   // MessageBox.Show(texto1+" "+texto2);

                    MessageBox.Show("Ambos textos concatenados: " + texto1 + " " + texto2);


            }*/

        
        // Botón con evento y cálculos.
            private void b1_Click(object sender, EventArgs e)
            {

                // Textos convertidos a números.

                    int numero1 = int.Parse(t1.Text);
                    int numero2 = int.Parse(t2.Text);
                    //int numero3 = numero1 + numero2;
                    int numero3 = numero1 * numero2;
                    //t3.Text = numero3;
                   //t3.Text = numero3.ToString();
                   //t3.Text = string.Format("El valor de numero3 es: ", numero3);
           
            // Textos concatenados en ventana emergente.
                
                   MessageBox.Show(string.Format("El valor de numero3 es: ", numero3));
                   //MessageBox.Show("El resultado es: "+numero3.ToString());


            }
    }
}
