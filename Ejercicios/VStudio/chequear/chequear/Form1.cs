namespace chequear
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        public void b1_Click(object sender, EventArgs e)
        {

            string opcion = "";
            if (radio1.Checked == true)
            {
                opcion = "Sí";
                texto1.Text = opcion;

            }
            else if (radio2.Checked == true)
            {
                opcion = "No";
                texto1.Text = opcion;

            }

        }

        private void b2_Click(object sender, EventArgs e)
        {

            string casillas = "";
            if (casilla1.Checked == true)
            {
                casillas = casillas + casilla1.Text;
                texto2.Text = casillas;

            }
            if (casilla2.Checked == true)
            {
                casillas = casillas + " " + casilla2.Text;
                texto2.Text = casillas;

            }

        }

        private void b3_Click(object sender, EventArgs e)
        {
            texto1.Clear();
            texto2.Clear();
        }
    }
}
