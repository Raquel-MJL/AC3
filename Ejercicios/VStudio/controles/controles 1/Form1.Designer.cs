namespace controles_1
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
            p1 = new Panel();
            l2 = new Label();
            b1 = new Button();
            p1.SuspendLayout();
            SuspendLayout();
            // 
            // p1
            // 
            p1.BackColor = SystemColors.ActiveCaption;
            p1.BorderStyle = BorderStyle.FixedSingle;
            p1.Controls.Add(l2);
            p1.Controls.Add(b1);
            p1.Location = new Point(25, 32);
            p1.Name = "p1";
            p1.Size = new Size(255, 154);
            p1.TabIndex = 0;
            // 
            // l2
            // 
            l2.Font = new Font("Verdana", 12F, FontStyle.Bold | FontStyle.Italic, GraphicsUnit.Point);
            l2.Location = new Point(3, 117);
            l2.Name = "l2";
            l2.Size = new Size(253, 36);
            l2.TabIndex = 4;
            // 
            // b1
            // 
            b1.Location = new Point(87, 50);
            b1.Name = "b1";
            b1.Size = new Size(75, 23);
            b1.TabIndex = 3;
            b1.Text = "Saludo";
            b1.UseVisualStyleBackColor = true;
            b1.Click += b1_Click;
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(317, 213);
            Controls.Add(p1);
            Name = "Form1";
            Text = "Form1";
            p1.ResumeLayout(false);
            ResumeLayout(false);
        }

        #endregion

        private Panel p1;
        private Button b1;
        private Label l2;
    }
}