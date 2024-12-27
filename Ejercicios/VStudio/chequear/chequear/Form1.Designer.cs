namespace chequear
{
    partial class Form1
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            radio1 = new RadioButton();
            radio2 = new RadioButton();
            casilla1 = new CheckBox();
            casilla2 = new CheckBox();
            texto1 = new TextBox();
            texto2 = new TextBox();
            b1 = new Button();
            b2 = new Button();
            b3 = new Button();
            SuspendLayout();
            // 
            // radio1
            // 
            radio1.AutoSize = true;
            radio1.Location = new Point(79, 132);
            radio1.Name = "radio1";
            radio1.Size = new Size(34, 19);
            radio1.TabIndex = 0;
            radio1.TabStop = true;
            radio1.Text = "Sí";
            radio1.UseVisualStyleBackColor = true;
            // 
            // radio2
            // 
            radio2.AutoSize = true;
            radio2.Location = new Point(79, 180);
            radio2.Name = "radio2";
            radio2.Size = new Size(41, 19);
            radio2.TabIndex = 1;
            radio2.TabStop = true;
            radio2.Text = "No";
            radio2.UseVisualStyleBackColor = true;
            // 
            // casilla1
            // 
            casilla1.AutoSize = true;
            casilla1.Location = new Point(421, 131);
            casilla1.Name = "casilla1";
            casilla1.Size = new Size(47, 19);
            casilla1.TabIndex = 2;
            casilla1.Text = "uno";
            casilla1.UseVisualStyleBackColor = true;
            // 
            // casilla2
            // 
            casilla2.AutoSize = true;
            casilla2.Location = new Point(422, 178);
            casilla2.Name = "casilla2";
            casilla2.Size = new Size(45, 19);
            casilla2.TabIndex = 3;
            casilla2.Text = "dos";
            casilla2.UseVisualStyleBackColor = true;
            // 
            // texto1
            // 
            texto1.Location = new Point(122, 316);
            texto1.Name = "texto1";
            texto1.Size = new Size(139, 23);
            texto1.TabIndex = 4;
            // 
            // texto2
            // 
            texto2.Location = new Point(421, 316);
            texto2.Name = "texto2";
            texto2.Size = new Size(158, 23);
            texto2.TabIndex = 5;
            // 
            // b1
            // 
            b1.Location = new Point(131, 380);
            b1.Name = "b1";
            b1.Size = new Size(130, 23);
            b1.TabIndex = 6;
            b1.Text = "Botones de opción";
            b1.UseVisualStyleBackColor = true;
            b1.Click += b1_Click;
            // 
            // b2
            // 
            b2.Location = new Point(424, 380);
            b2.Name = "b2";
            b2.Size = new Size(155, 23);
            b2.TabIndex = 8;
            b2.Text = "Casilla de verificación";
            b2.UseVisualStyleBackColor = true;
            b2.Click += b2_Click;
            // 
            // b3
            // 
            b3.Location = new Point(647, 381);
            b3.Name = "b3";
            b3.Size = new Size(124, 23);
            b3.TabIndex = 10;
            b3.Text = "Borrar cuadros";
            b3.UseVisualStyleBackColor = true;
            b3.Click += b3_Click;
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(800, 450);
            Controls.Add(b3);
            Controls.Add(b2);
            Controls.Add(b1);
            Controls.Add(texto2);
            Controls.Add(texto1);
            Controls.Add(casilla2);
            Controls.Add(casilla1);
            Controls.Add(radio2);
            Controls.Add(radio1);
            Name = "Form1";
            Text = "Form1";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private RadioButton radio1;
        private RadioButton radio2;
        private CheckBox casilla1;
        private CheckBox casilla2;
        private TextBox texto1;
        private TextBox texto2;
        private Button b1;
        private Button b2;
        private Button b3;
    }
}
