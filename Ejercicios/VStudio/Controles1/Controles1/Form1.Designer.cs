namespace Controles1
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
            this.nombre = new System.Windows.Forms.TextBox();
            this.etiqueta1 = new System.Windows.Forms.Label();
            this.label1 = new System.Windows.Forms.Label();
            this.boton1 = new System.Windows.Forms.Button();
            this.etiqueta2 = new System.Windows.Forms.Label();
            this.grupo2 = new System.Windows.Forms.GroupBox();
            this.anio1 = new System.Windows.Forms.TextBox();
            this.anio2 = new System.Windows.Forms.TextBox();
            this.A = new System.Windows.Forms.Label();
            this.label2 = new System.Windows.Forms.Label();
            this.resultado2 = new System.Windows.Forms.Label();
            this.boton2 = new System.Windows.Forms.Button();
            this.grupo3 = new System.Windows.Forms.GroupBox();
            this.boton31 = new System.Windows.Forms.Button();
            this.label3 = new System.Windows.Forms.Label();
            this.boton32 = new System.Windows.Forms.Button();
            this.boton33 = new System.Windows.Forms.Button();
            this.grupo1 = new System.Windows.Forms.GroupBox();
            this.grupo2.SuspendLayout();
            this.grupo3.SuspendLayout();
            this.grupo1.SuspendLayout();
            this.SuspendLayout();
            // 
            // nombre
            // 
            this.nombre.Location = new System.Drawing.Point(9, 48);
            this.nombre.Name = "nombre";
            this.nombre.Size = new System.Drawing.Size(100, 20);
            this.nombre.TabIndex = 0;
            // 
            // etiqueta1
            // 
            this.etiqueta1.AutoSize = true;
            this.etiqueta1.Location = new System.Drawing.Point(6, 25);
            this.etiqueta1.Name = "etiqueta1";
            this.etiqueta1.Size = new System.Drawing.Size(90, 13);
            this.etiqueta1.TabIndex = 1;
            this.etiqueta1.Text = "¿Cómo te llamas?";
            this.etiqueta1.Click += new System.EventHandler(this.etiqueta1_Click);
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(23, 91);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(0, 13);
            this.label1.TabIndex = 2;
            // 
            // boton1
            // 
            this.boton1.Location = new System.Drawing.Point(34, 74);
            this.boton1.Name = "boton1";
            this.boton1.Size = new System.Drawing.Size(75, 23);
            this.boton1.TabIndex = 3;
            this.boton1.Text = "Saludar";
            this.boton1.UseVisualStyleBackColor = true;
            this.boton1.Click += new System.EventHandler(this.boton1_Click);
            // 
            // etiqueta2
            // 
            this.etiqueta2.AutoSize = true;
            this.etiqueta2.BackColor = System.Drawing.SystemColors.GradientInactiveCaption;
            this.etiqueta2.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.etiqueta2.Location = new System.Drawing.Point(9, 140);
            this.etiqueta2.Name = "etiqueta2";
            this.etiqueta2.Size = new System.Drawing.Size(2, 15);
            this.etiqueta2.TabIndex = 4;
            this.etiqueta2.UseMnemonic = false;
            this.etiqueta2.Click += new System.EventHandler(this.etiqueta2_Click);
            // 
            // grupo2
            // 
            this.grupo2.Controls.Add(this.boton2);
            this.grupo2.Controls.Add(this.resultado2);
            this.grupo2.Controls.Add(this.label2);
            this.grupo2.Controls.Add(this.A);
            this.grupo2.Controls.Add(this.anio2);
            this.grupo2.Controls.Add(this.anio1);
            this.grupo2.Location = new System.Drawing.Point(172, 33);
            this.grupo2.Name = "grupo2";
            this.grupo2.Size = new System.Drawing.Size(228, 257);
            this.grupo2.TabIndex = 5;
            this.grupo2.TabStop = false;
            this.grupo2.Text = "Ejercicio 2";
            // 
            // anio1
            // 
            this.anio1.Location = new System.Drawing.Point(24, 58);
            this.anio1.Name = "anio1";
            this.anio1.Size = new System.Drawing.Size(100, 20);
            this.anio1.TabIndex = 0;
            this.anio1.TextChanged += new System.EventHandler(this.textBox1_TextChanged);
            // 
            // anio2
            // 
            this.anio2.Location = new System.Drawing.Point(24, 117);
            this.anio2.Name = "anio2";
            this.anio2.Size = new System.Drawing.Size(100, 20);
            this.anio2.TabIndex = 1;
            // 
            // A
            // 
            this.A.AutoSize = true;
            this.A.Location = new System.Drawing.Point(21, 42);
            this.A.Name = "A";
            this.A.Size = new System.Drawing.Size(32, 13);
            this.A.TabIndex = 2;
            this.A.Text = "Año1";
            this.A.Click += new System.EventHandler(this.A_Click);
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(21, 101);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(35, 13);
            this.label2.TabIndex = 3;
            this.label2.Text = "Año 2";
            this.label2.Click += new System.EventHandler(this.label2_Click);
            // 
            // resultado2
            // 
            this.resultado2.AutoSize = true;
            this.resultado2.BackColor = System.Drawing.SystemColors.GradientInactiveCaption;
            this.resultado2.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.resultado2.Font = new System.Drawing.Font("Consolas", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.resultado2.Location = new System.Drawing.Point(24, 155);
            this.resultado2.Name = "resultado2";
            this.resultado2.Size = new System.Drawing.Size(2, 21);
            this.resultado2.TabIndex = 6;
            this.resultado2.TextAlign = System.Drawing.ContentAlignment.MiddleCenter;
            // 
            // boton2
            // 
            this.boton2.Location = new System.Drawing.Point(24, 212);
            this.boton2.Name = "boton2";
            this.boton2.Size = new System.Drawing.Size(110, 23);
            this.boton2.TabIndex = 6;
            this.boton2.Text = "Calcular diferencia";
            this.boton2.UseVisualStyleBackColor = true;
            this.boton2.Click += new System.EventHandler(this.boton2_Click);
            // 
            // grupo3
            // 
            this.grupo3.Controls.Add(this.boton33);
            this.grupo3.Controls.Add(this.boton32);
            this.grupo3.Controls.Add(this.boton31);
            this.grupo3.Controls.Add(this.label3);
            this.grupo3.Location = new System.Drawing.Point(415, 33);
            this.grupo3.Name = "grupo3";
            this.grupo3.Size = new System.Drawing.Size(299, 225);
            this.grupo3.TabIndex = 7;
            this.grupo3.TabStop = false;
            this.grupo3.Text = "Ejercicio 3";
            // 
            // boton31
            // 
            this.boton31.ForeColor = System.Drawing.SystemColors.ControlDarkDark;
            this.boton31.Location = new System.Drawing.Point(24, 186);
            this.boton31.Name = "boton31";
            this.boton31.Size = new System.Drawing.Size(57, 23);
            this.boton31.TabIndex = 6;
            this.boton31.Text = "Boton 1";
            this.boton31.UseVisualStyleBackColor = true;
            this.boton31.Click += new System.EventHandler(this.boton31_Click);
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.BackColor = System.Drawing.SystemColors.GradientInactiveCaption;
            this.label3.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.label3.Font = new System.Drawing.Font("Comic Sans MS", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label3.Location = new System.Drawing.Point(24, 32);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(2, 31);
            this.label3.TabIndex = 6;
            // 
            // boton32
            // 
            this.boton32.ForeColor = System.Drawing.SystemColors.MenuHighlight;
            this.boton32.Location = new System.Drawing.Point(87, 186);
            this.boton32.Name = "boton32";
            this.boton32.Size = new System.Drawing.Size(57, 23);
            this.boton32.TabIndex = 7;
            this.boton32.Text = "Boton 2";
            this.boton32.UseVisualStyleBackColor = true;
            this.boton32.Click += new System.EventHandler(this.boton32_Click);
            // 
            // boton33
            // 
            this.boton33.ForeColor = System.Drawing.Color.Coral;
            this.boton33.Location = new System.Drawing.Point(150, 186);
            this.boton33.Name = "boton33";
            this.boton33.Size = new System.Drawing.Size(57, 23);
            this.boton33.TabIndex = 8;
            this.boton33.Text = "Boton 3";
            this.boton33.UseVisualStyleBackColor = true;
            this.boton33.Click += new System.EventHandler(this.boton33_Click);
            // 
            // grupo1
            // 
            this.grupo1.Controls.Add(this.etiqueta1);
            this.grupo1.Controls.Add(this.nombre);
            this.grupo1.Controls.Add(this.boton1);
            this.grupo1.Controls.Add(this.etiqueta2);
            this.grupo1.Location = new System.Drawing.Point(26, 33);
            this.grupo1.Name = "grupo1";
            this.grupo1.Size = new System.Drawing.Size(131, 198);
            this.grupo1.TabIndex = 8;
            this.grupo1.TabStop = false;
            this.grupo1.Text = "Ejercicio 1";
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(800, 450);
            this.Controls.Add(this.grupo1);
            this.Controls.Add(this.grupo3);
            this.Controls.Add(this.grupo2);
            this.Controls.Add(this.label1);
            this.Name = "Form1";
            this.Text = "Form1";
            this.Load += new System.EventHandler(this.Form1_Load);
            this.grupo2.ResumeLayout(false);
            this.grupo2.PerformLayout();
            this.grupo3.ResumeLayout(false);
            this.grupo3.PerformLayout();
            this.grupo1.ResumeLayout(false);
            this.grupo1.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.TextBox nombre;
        private System.Windows.Forms.Label etiqueta1;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.Button boton1;
        private System.Windows.Forms.Label etiqueta2;
        private System.Windows.Forms.GroupBox grupo2;
        private System.Windows.Forms.TextBox anio2;
        private System.Windows.Forms.TextBox anio1;
        private System.Windows.Forms.Label A;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Button boton2;
        private System.Windows.Forms.Label resultado2;
        private System.Windows.Forms.GroupBox grupo3;
        private System.Windows.Forms.Button boton31;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Button boton33;
        private System.Windows.Forms.Button boton32;
        private System.Windows.Forms.GroupBox grupo1;
    }
}

