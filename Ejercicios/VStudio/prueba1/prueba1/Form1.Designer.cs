namespace prueba1
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
            this.etiqueta1 = new System.Windows.Forms.Label();
            this.cuadro1 = new System.Windows.Forms.TextBox();
            this.boton1 = new System.Windows.Forms.Button();
            this.cuadro2 = new System.Windows.Forms.TextBox();
            this.grupo1 = new System.Windows.Forms.GroupBox();
            this.radio1 = new System.Windows.Forms.RadioButton();
            this.radio2 = new System.Windows.Forms.RadioButton();
            this.radio3 = new System.Windows.Forms.RadioButton();
            this.radio4 = new System.Windows.Forms.RadioButton();
            this.cuadro3 = new System.Windows.Forms.TextBox();
            this.boton2 = new System.Windows.Forms.Button();
            this.grupo1.SuspendLayout();
            this.SuspendLayout();
            // 
            // etiqueta1
            // 
            this.etiqueta1.AutoSize = true;
            this.etiqueta1.Location = new System.Drawing.Point(42, 49);
            this.etiqueta1.Name = "etiqueta1";
            this.etiqueta1.Size = new System.Drawing.Size(47, 13);
            this.etiqueta1.TabIndex = 0;
            this.etiqueta1.Text = "Nombre:";
            this.etiqueta1.Click += new System.EventHandler(this.label1_Click);
            // 
            // cuadro1
            // 
            this.cuadro1.Location = new System.Drawing.Point(45, 65);
            this.cuadro1.Name = "cuadro1";
            this.cuadro1.Size = new System.Drawing.Size(139, 20);
            this.cuadro1.TabIndex = 1;
            this.cuadro1.TextChanged += new System.EventHandler(this.textBox1_TextChanged);
            // 
            // boton1
            // 
            this.boton1.Location = new System.Drawing.Point(190, 65);
            this.boton1.Name = "boton1";
            this.boton1.Size = new System.Drawing.Size(51, 21);
            this.boton1.TabIndex = 2;
            this.boton1.Text = "Enviar";
            this.boton1.UseVisualStyleBackColor = true;
            this.boton1.Click += new System.EventHandler(this.boton1_Click);
            // 
            // cuadro2
            // 
            this.cuadro2.Location = new System.Drawing.Point(45, 114);
            this.cuadro2.Name = "cuadro2";
            this.cuadro2.Size = new System.Drawing.Size(139, 20);
            this.cuadro2.TabIndex = 3;
            this.cuadro2.TextChanged += new System.EventHandler(this.cuadro2_TextChanged);
            // 
            // grupo1
            // 
            this.grupo1.Controls.Add(this.radio3);
            this.grupo1.Controls.Add(this.radio2);
            this.grupo1.Controls.Add(this.radio1);
            this.grupo1.Location = new System.Drawing.Point(274, 65);
            this.grupo1.Name = "grupo1";
            this.grupo1.Size = new System.Drawing.Size(187, 130);
            this.grupo1.TabIndex = 4;
            this.grupo1.TabStop = false;
            this.grupo1.Text = "Estado Civil: ";
            // 
            // radio1
            // 
            this.radio1.AutoSize = true;
            this.radio1.Location = new System.Drawing.Point(15, 30);
            this.radio1.Name = "radio1";
            this.radio1.Size = new System.Drawing.Size(58, 17);
            this.radio1.TabIndex = 0;
            this.radio1.TabStop = true;
            this.radio1.Text = "Soltero";
            this.radio1.UseVisualStyleBackColor = true;
            // 
            // radio2
            // 
            this.radio2.AutoSize = true;
            this.radio2.Location = new System.Drawing.Point(15, 53);
            this.radio2.Name = "radio2";
            this.radio2.Size = new System.Drawing.Size(61, 17);
            this.radio2.TabIndex = 1;
            this.radio2.TabStop = true;
            this.radio2.Text = "Casado";
            this.radio2.UseVisualStyleBackColor = true;
            this.radio2.CheckedChanged += new System.EventHandler(this.radioButton1_CheckedChanged);
            // 
            // radio3
            // 
            this.radio3.AutoSize = true;
            this.radio3.Location = new System.Drawing.Point(15, 76);
            this.radio3.Name = "radio3";
            this.radio3.Size = new System.Drawing.Size(63, 17);
            this.radio3.TabIndex = 2;
            this.radio3.TabStop = true;
            this.radio3.Text = "Viudo/a";
            this.radio3.UseVisualStyleBackColor = true;
            // 
            // radio4
            // 
            this.radio4.AutoSize = true;
            this.radio4.Location = new System.Drawing.Point(357, 42);
            this.radio4.Name = "radio4";
            this.radio4.Size = new System.Drawing.Size(104, 17);
            this.radio4.TabIndex = 3;
            this.radio4.TabStop = true;
            this.radio4.Text = "PRUEBA ASIDE";
            this.radio4.UseVisualStyleBackColor = true;
            this.radio4.CheckedChanged += new System.EventHandler(this.radioButton1_CheckedChanged_1);
            // 
            // cuadro3
            // 
            this.cuadro3.Location = new System.Drawing.Point(322, 314);
            this.cuadro3.Name = "cuadro3";
            this.cuadro3.Size = new System.Drawing.Size(139, 20);
            this.cuadro3.TabIndex = 5;
            // 
            // boton2
            // 
            this.boton2.Location = new System.Drawing.Point(388, 201);
            this.boton2.Name = "boton2";
            this.boton2.Size = new System.Drawing.Size(73, 25);
            this.boton2.TabIndex = 6;
            this.boton2.Text = "Enviar";
            this.boton2.UseVisualStyleBackColor = true;
            this.boton2.Click += new System.EventHandler(this.boton2_Click);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.Controls.Add(this.boton2);
            this.Controls.Add(this.cuadro3);
            this.Controls.Add(this.radio4);
            this.Controls.Add(this.grupo1);
            this.Controls.Add(this.cuadro2);
            this.Controls.Add(this.boton1);
            this.Controls.Add(this.cuadro1);
            this.Controls.Add(this.etiqueta1);
            this.Name = "Form1";
            this.Text = "Form1";
            this.grupo1.ResumeLayout(false);
            this.grupo1.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label etiqueta1;
        private System.Windows.Forms.TextBox cuadro1;
        private System.Windows.Forms.Button boton1;
        private System.Windows.Forms.TextBox cuadro2;
        private System.Windows.Forms.GroupBox grupo1;
        private System.Windows.Forms.RadioButton radio2;
        private System.Windows.Forms.RadioButton radio1;
        private System.Windows.Forms.RadioButton radio3;
        private System.Windows.Forms.RadioButton radio4;
        private System.Windows.Forms.TextBox cuadro3;
        private System.Windows.Forms.Button boton2;
    }
}

