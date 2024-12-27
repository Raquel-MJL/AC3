namespace ventana4
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void b1_Click(object sender, EventArgs e)
        {
            //string palabra = texto1.Text;
            // t2.Text = palabra;

            int numero = int.Parse(texto1.Text);
            numero = numero * 2;
            t2.Text = numero.ToString();
        }

        private void b2_Click(object sender, EventArgs e)
        {

            if (lista.SelectedItem != null)
            {
                t20.Text = lista.SelectedItem.ToString();
                MessageBox.Show(lista.SelectedItem.ToString());
            }

            /*   if (lista.SelectedIndex != -1) 
               {
                   t20.Text= lista.SelectedIndex.ToString(); // Muestra el �ndice del elemento seleccinado en la lista. Con if ... else se puede cambiar por la opci�n elegida.
               }
           
             */
        }
        private void b3_Click(object sender, EventArgs e)
        {
		   if (rb1.Checked)

			{
				t19.Text = "Luz encendida";
			}
			else if (rb2.Checked)

			{
				t19.Text = "Luz apagada";
			}
			else
			{
				t19.Text = "Gato de Schrödinger";
			}
        }

        private void b4_Click(object sender, EventArgs e)
        {
            string opcion = "";
           
            if (o1.Checked)

            {
                opcion = opcion + "Informática ";
                t18.Text = opcion;
            }
            if (o2.Checked)

            {
                opcion = opcion + "Derecho ";
                t18.Text = opcion;
            }
            if(o3.Checked)
            {
                opcion = opcion + "Literatura ";
                t18.Text = opcion;
            }
        }
    }
}
