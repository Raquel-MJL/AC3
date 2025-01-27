namespace ejercicio4
{
    partial class Form1
    {
        /// <summary>
        /// Variable del diseñador necesaria.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Limpiar los recursos que se estén usando.
        /// </summary>
        /// <param name="disposing">true si los recursos administrados se deben desechar; false en caso contrario.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Código generado por el Diseñador de Windows Forms

        /// <summary>
        /// Método necesario para admitir el Diseñador. No se puede modificar
        /// el contenido de este método con el editor de código.
        /// </summary>
        private void InitializeComponent()
        {
            this.groupBox1 = new System.Windows.Forms.GroupBox();
            this.euros = new System.Windows.Forms.TextBox();
            this.texto1 = new System.Windows.Forms.Label();
            this.texto2 = new System.Windows.Forms.Label();
            this.conversion = new System.Windows.Forms.TextBox();
            this.opcion1 = new System.Windows.Forms.RadioButton();
            this.opcion2 = new System.Windows.Forms.RadioButton();
            this.opcion3 = new System.Windows.Forms.RadioButton();
            this.opcion4 = new System.Windows.Forms.RadioButton();
            this.button1 = new System.Windows.Forms.Button();
            this.backgroundWorker1 = new System.ComponentModel.BackgroundWorker();
            this.groupBox1.SuspendLayout();
            this.SuspendLayout();
            // 
            // groupBox1
            // 
            this.groupBox1.Controls.Add(this.button1);
            this.groupBox1.Controls.Add(this.opcion4);
            this.groupBox1.Controls.Add(this.opcion3);
            this.groupBox1.Controls.Add(this.opcion2);
            this.groupBox1.Controls.Add(this.opcion1);
            this.groupBox1.Controls.Add(this.texto2);
            this.groupBox1.Controls.Add(this.conversion);
            this.groupBox1.Controls.Add(this.texto1);
            this.groupBox1.Controls.Add(this.euros);
            this.groupBox1.Location = new System.Drawing.Point(19, 14);
            this.groupBox1.Name = "groupBox1";
            this.groupBox1.Size = new System.Drawing.Size(595, 379);
            this.groupBox1.TabIndex = 0;
            this.groupBox1.TabStop = false;
            this.groupBox1.Text = "Conversor de monedas";
            // 
            // euros
            // 
            this.euros.Location = new System.Drawing.Point(6, 82);
            this.euros.Name = "euros";
            this.euros.Size = new System.Drawing.Size(100, 20);
            this.euros.TabIndex = 0;
            // 
            // texto1
            // 
            this.texto1.AutoSize = true;
            this.texto1.Location = new System.Drawing.Point(3, 57);
            this.texto1.Name = "texto1";
            this.texto1.Size = new System.Drawing.Size(169, 13);
            this.texto1.TabIndex = 1;
            this.texto1.Text = "Introduzca una cantidad en euros:";
            this.texto1.Click += new System.EventHandler(this.label1_Click);
            // 
            // texto2
            // 
            this.texto2.AutoSize = true;
            this.texto2.Location = new System.Drawing.Point(201, 57);
            this.texto2.Name = "texto2";
            this.texto2.Size = new System.Drawing.Size(106, 13);
            this.texto2.TabIndex = 3;
            this.texto2.Text = "Cantidad Convertida:";
            // 
            // conversion
            // 
            this.conversion.Location = new System.Drawing.Point(204, 82);
            this.conversion.Name = "conversion";
            this.conversion.Size = new System.Drawing.Size(100, 20);
            this.conversion.TabIndex = 2;
            // 
            // opcion1
            // 
            this.opcion1.AutoSize = true;
            this.opcion1.Location = new System.Drawing.Point(19, 145);
            this.opcion1.Name = "opcion1";
            this.opcion1.Size = new System.Drawing.Size(65, 17);
            this.opcion1.TabIndex = 4;
            this.opcion1.TabStop = true;
            this.opcion1.Text = "Dólar ($)";
            this.opcion1.UseVisualStyleBackColor = true;
            // 
            // opcion2
            // 
            this.opcion2.AutoSize = true;
            this.opcion2.Location = new System.Drawing.Point(19, 168);
            this.opcion2.Name = "opcion2";
            this.opcion2.Size = new System.Drawing.Size(106, 17);
            this.opcion2.TabIndex = 5;
            this.opcion2.TabStop = true;
            this.opcion2.Text = "Libra Esterlina (£)";
            this.opcion2.UseVisualStyleBackColor = true;
            // 
            // opcion3
            // 
            this.opcion3.AutoSize = true;
            this.opcion3.Location = new System.Drawing.Point(19, 191);
            this.opcion3.Name = "opcion3";
            this.opcion3.Size = new System.Drawing.Size(59, 17);
            this.opcion3.TabIndex = 6;
            this.opcion3.TabStop = true;
            this.opcion3.Text = "Yen (¥)";
            this.opcion3.UseVisualStyleBackColor = true;
            // 
            // opcion4
            // 
            this.opcion4.AutoSize = true;
            this.opcion4.Location = new System.Drawing.Point(19, 214);
            this.opcion4.Name = "opcion4";
            this.opcion4.Size = new System.Drawing.Size(65, 17);
            this.opcion4.TabIndex = 7;
            this.opcion4.TabStop = true;
            this.opcion4.Text = "Yuan (¥)";
            this.opcion4.UseVisualStyleBackColor = true;
            this.opcion4.CheckedChanged += new System.EventHandler(this.opcion4_CheckedChanged);
            // 
            // button1
            // 
            this.button1.Location = new System.Drawing.Point(19, 249);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(87, 29);
            this.button1.TabIndex = 8;
            this.button1.Text = "Convertir";
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.button1_Click);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.Controls.Add(this.groupBox1);
            this.Name = "Form1";
            this.Text = "Form1";
            this.groupBox1.ResumeLayout(false);
            this.groupBox1.PerformLayout();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.GroupBox groupBox1;
        private System.Windows.Forms.Label texto1;
        private System.Windows.Forms.TextBox euros;
        private System.Windows.Forms.Label texto2;
        private System.Windows.Forms.TextBox conversion;
        private System.Windows.Forms.RadioButton opcion4;
        private System.Windows.Forms.RadioButton opcion3;
        private System.Windows.Forms.RadioButton opcion2;
        private System.Windows.Forms.RadioButton opcion1;
        private System.Windows.Forms.Button button1;
        private System.ComponentModel.BackgroundWorker backgroundWorker1;
    }
}

