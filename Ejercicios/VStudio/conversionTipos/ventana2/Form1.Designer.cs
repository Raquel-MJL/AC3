namespace ventana2
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
            b1 = new Button();
            t3 = new TextBox();
            t2 = new TextBox();
            t1 = new TextBox();
            etiqueta = new Label();
            SuspendLayout();
            // 
            // b1
            // 
            b1.Location = new Point(84, 309);
            b1.Name = "b1";
            b1.Size = new Size(75, 23);
            b1.TabIndex = 0;
            b1.Text = "Resultado";
            b1.UseVisualStyleBackColor = true;
            b1.Click += b1_Click;
            // 
            // t3
            // 
            t3.Location = new Point(84, 222);
            t3.Name = "t3";
            t3.Size = new Size(168, 23);
            t3.TabIndex = 1;
            // 
            // t2
            // 
            t2.Location = new Point(84, 147);
            t2.Name = "t2";
            t2.Size = new Size(168, 23);
            t2.TabIndex = 2;
            // 
            // t1
            // 
            t1.Location = new Point(84, 86);
            t1.Name = "t1";
            t1.Size = new Size(168, 23);
            t1.TabIndex = 3;
            // 
            // etiqueta
            // 
            etiqueta.AutoSize = true;
            etiqueta.Location = new Point(91, 40);
            etiqueta.Name = "etiqueta";
            etiqueta.Size = new Size(251, 15);
            etiqueta.TabIndex = 4;
            etiqueta.Text = "Controles para cálculos y textos concatenados";
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(800, 450);
            Controls.Add(etiqueta);
            Controls.Add(t1);
            Controls.Add(t2);
            Controls.Add(t3);
            Controls.Add(b1);
            Name = "Form1";
            Text = "Form1";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Button b1;
        private TextBox t3;
        private TextBox t2;
        private TextBox t1;
        private Label etiqueta;
    }
}
