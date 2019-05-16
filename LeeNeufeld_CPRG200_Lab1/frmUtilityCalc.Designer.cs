namespace LeeNeufeld_CPRG200_Lab1
{
    partial class frmUtilityCalc
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
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
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.btnIndAdd = new System.Windows.Forms.Button();
            this.btnClear = new System.Windows.Forms.Button();
            this.tabCalculate = new System.Windows.Forms.TabControl();
            this.tpgResidential = new System.Windows.Forms.TabPage();
            this.txtResCustomerType = new System.Windows.Forms.TextBox();
            this.label3 = new System.Windows.Forms.Label();
            this.txtResCustomerName = new System.Windows.Forms.TextBox();
            this.label2 = new System.Windows.Forms.Label();
            this.txtResAccountNumber = new System.Windows.Forms.TextBox();
            this.label1 = new System.Windows.Forms.Label();
            this.txtResidentialTotal = new System.Windows.Forms.TextBox();
            this.lbl2 = new System.Windows.Forms.Label();
            this.txtResidential = new System.Windows.Forms.TextBox();
            this.lbl1 = new System.Windows.Forms.Label();
            this.lblResidential = new System.Windows.Forms.Label();
            this.btnClr = new System.Windows.Forms.Button();
            this.btnResAdd = new System.Windows.Forms.Button();
            this.tpgCommercial = new System.Windows.Forms.TabPage();
            this.txtCommAccountNumber = new System.Windows.Forms.TextBox();
            this.txtCommCustomerName = new System.Windows.Forms.TextBox();
            this.txtCommCustomerType = new System.Windows.Forms.TextBox();
            this.label6 = new System.Windows.Forms.Label();
            this.label5 = new System.Windows.Forms.Label();
            this.label4 = new System.Windows.Forms.Label();
            this.txtCommercialTotal = new System.Windows.Forms.TextBox();
            this.lblCommercialTotal = new System.Windows.Forms.Label();
            this.txtCommercial = new System.Windows.Forms.TextBox();
            this.lblCommercialKwh = new System.Windows.Forms.Label();
            this.lblCommercial = new System.Windows.Forms.Label();
            this.btnClr2 = new System.Windows.Forms.Button();
            this.btnCommAdd = new System.Windows.Forms.Button();
            this.tpgIndustrial = new System.Windows.Forms.TabPage();
            this.txtIndAccountNumber = new System.Windows.Forms.TextBox();
            this.txtIndCustomerName = new System.Windows.Forms.TextBox();
            this.txtIndCustomerType = new System.Windows.Forms.TextBox();
            this.lbl3 = new System.Windows.Forms.Label();
            this.label8 = new System.Windows.Forms.Label();
            this.label7 = new System.Windows.Forms.Label();
            this.txtIndustrialTotal = new System.Windows.Forms.TextBox();
            this.lblIndustrialTotal = new System.Windows.Forms.Label();
            this.txtIndustrialPeak = new System.Windows.Forms.TextBox();
            this.txtIndustrialNonPeak = new System.Windows.Forms.TextBox();
            this.lblIndustrialKwhNonPeak = new System.Windows.Forms.Label();
            this.lblIndustrialKwhPeak = new System.Windows.Forms.Label();
            this.lblIndustrial = new System.Windows.Forms.Label();
            this.btnClr3 = new System.Windows.Forms.Button();
            this.btnExit = new System.Windows.Forms.Button();
            this.lstCustomers = new System.Windows.Forms.ListBox();
            this.label9 = new System.Windows.Forms.Label();
            this.label10 = new System.Windows.Forms.Label();
            this.label11 = new System.Windows.Forms.Label();
            this.label12 = new System.Windows.Forms.Label();
            this.label13 = new System.Windows.Forms.Label();
            this.txtTotalCustomers = new System.Windows.Forms.TextBox();
            this.txtIndustrialCharges = new System.Windows.Forms.TextBox();
            this.txtCommercialCharges = new System.Windows.Forms.TextBox();
            this.txtResidentalCharges = new System.Windows.Forms.TextBox();
            this.txtTotalCharges = new System.Windows.Forms.TextBox();
            this.tabCalculate.SuspendLayout();
            this.tpgResidential.SuspendLayout();
            this.tpgCommercial.SuspendLayout();
            this.tpgIndustrial.SuspendLayout();
            this.SuspendLayout();
            // 
            // btnIndAdd
            // 
            this.btnIndAdd.Location = new System.Drawing.Point(32, 303);
            this.btnIndAdd.Name = "btnIndAdd";
            this.btnIndAdd.Size = new System.Drawing.Size(148, 35);
            this.btnIndAdd.TabIndex = 8;
            this.btnIndAdd.Text = "&Add";
            this.btnIndAdd.UseVisualStyleBackColor = true;
            this.btnIndAdd.Click += new System.EventHandler(this.btnIndAdd_Click);
            // 
            // btnClear
            // 
            this.btnClear.Location = new System.Drawing.Point(282, 399);
            this.btnClear.Name = "btnClear";
            this.btnClear.Size = new System.Drawing.Size(148, 35);
            this.btnClear.TabIndex = 9;
            this.btnClear.Text = "&Clear";
            this.btnClear.UseVisualStyleBackColor = true;
            // 
            // tabCalculate
            // 
            this.tabCalculate.Controls.Add(this.tpgResidential);
            this.tabCalculate.Controls.Add(this.tpgCommercial);
            this.tabCalculate.Controls.Add(this.tpgIndustrial);
            this.tabCalculate.Location = new System.Drawing.Point(1, 0);
            this.tabCalculate.Name = "tabCalculate";
            this.tabCalculate.SelectedIndex = 0;
            this.tabCalculate.Size = new System.Drawing.Size(534, 460);
            this.tabCalculate.TabIndex = 13;
            // 
            // tpgResidential
            // 
            this.tpgResidential.Controls.Add(this.txtResCustomerType);
            this.tpgResidential.Controls.Add(this.label3);
            this.tpgResidential.Controls.Add(this.txtResCustomerName);
            this.tpgResidential.Controls.Add(this.label2);
            this.tpgResidential.Controls.Add(this.txtResAccountNumber);
            this.tpgResidential.Controls.Add(this.label1);
            this.tpgResidential.Controls.Add(this.txtResidentialTotal);
            this.tpgResidential.Controls.Add(this.lbl2);
            this.tpgResidential.Controls.Add(this.txtResidential);
            this.tpgResidential.Controls.Add(this.lbl1);
            this.tpgResidential.Controls.Add(this.lblResidential);
            this.tpgResidential.Controls.Add(this.btnClr);
            this.tpgResidential.Controls.Add(this.btnResAdd);
            this.tpgResidential.Location = new System.Drawing.Point(4, 22);
            this.tpgResidential.Name = "tpgResidential";
            this.tpgResidential.Padding = new System.Windows.Forms.Padding(3);
            this.tpgResidential.Size = new System.Drawing.Size(526, 434);
            this.tpgResidential.TabIndex = 0;
            this.tpgResidential.Text = "Residential";
            this.tpgResidential.UseVisualStyleBackColor = true;
            // 
            // txtResCustomerType
            // 
            this.txtResCustomerType.Location = new System.Drawing.Point(237, 157);
            this.txtResCustomerType.Name = "txtResCustomerType";
            this.txtResCustomerType.Size = new System.Drawing.Size(170, 20);
            this.txtResCustomerType.TabIndex = 27;
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label3.Location = new System.Drawing.Point(7, 155);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(134, 20);
            this.label3.TabIndex = 26;
            this.label3.Text = "Customer Type:";
            // 
            // txtResCustomerName
            // 
            this.txtResCustomerName.Location = new System.Drawing.Point(237, 115);
            this.txtResCustomerName.Name = "txtResCustomerName";
            this.txtResCustomerName.Size = new System.Drawing.Size(170, 20);
            this.txtResCustomerName.TabIndex = 25;
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.Location = new System.Drawing.Point(7, 113);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(142, 20);
            this.label2.TabIndex = 24;
            this.label2.Text = "Customer Name:";
            // 
            // txtResAccountNumber
            // 
            this.txtResAccountNumber.Location = new System.Drawing.Point(237, 62);
            this.txtResAccountNumber.Name = "txtResAccountNumber";
            this.txtResAccountNumber.Size = new System.Drawing.Size(170, 20);
            this.txtResAccountNumber.TabIndex = 23;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(7, 60);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(147, 20);
            this.label1.TabIndex = 22;
            this.label1.Text = "Account Number:";
            // 
            // txtResidentialTotal
            // 
            this.txtResidentialTotal.Location = new System.Drawing.Point(237, 341);
            this.txtResidentialTotal.Name = "txtResidentialTotal";
            this.txtResidentialTotal.Size = new System.Drawing.Size(137, 20);
            this.txtResidentialTotal.TabIndex = 21;
            // 
            // lbl2
            // 
            this.lbl2.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl2.Location = new System.Drawing.Point(73, 341);
            this.lbl2.Name = "lbl2";
            this.lbl2.Size = new System.Drawing.Size(90, 28);
            this.lbl2.TabIndex = 20;
            this.lbl2.Text = "Bill Total:";
            // 
            // txtResidential
            // 
            this.txtResidential.Location = new System.Drawing.Point(237, 202);
            this.txtResidential.Name = "txtResidential";
            this.txtResidential.Size = new System.Drawing.Size(170, 20);
            this.txtResidential.TabIndex = 19;
            // 
            // lbl1
            // 
            this.lbl1.AutoSize = true;
            this.lbl1.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl1.Location = new System.Drawing.Point(7, 200);
            this.lbl1.Name = "lbl1";
            this.lbl1.Size = new System.Drawing.Size(199, 20);
            this.lbl1.TabIndex = 15;
            this.lbl1.Text = "Please enter your KWH:";
            // 
            // lblResidential
            // 
            this.lblResidential.AutoSize = true;
            this.lblResidential.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblResidential.Location = new System.Drawing.Point(23, 14);
            this.lblResidential.Name = "lblResidential";
            this.lblResidential.Size = new System.Drawing.Size(102, 24);
            this.lblResidential.TabIndex = 14;
            this.lblResidential.Text = "Residential";
            // 
            // btnClr
            // 
            this.btnClr.Location = new System.Drawing.Point(237, 260);
            this.btnClr.Name = "btnClr";
            this.btnClr.Size = new System.Drawing.Size(148, 35);
            this.btnClr.TabIndex = 12;
            this.btnClr.Text = "&Clear";
            this.btnClr.UseVisualStyleBackColor = true;
            this.btnClr.Click += new System.EventHandler(this.btnClr_Click);
            // 
            // btnResAdd
            // 
            this.btnResAdd.Location = new System.Drawing.Point(45, 260);
            this.btnResAdd.Name = "btnResAdd";
            this.btnResAdd.Size = new System.Drawing.Size(148, 35);
            this.btnResAdd.TabIndex = 11;
            this.btnResAdd.Text = "&Add";
            this.btnResAdd.UseVisualStyleBackColor = true;
            this.btnResAdd.Click += new System.EventHandler(this.btnResAdd_Click);
            // 
            // tpgCommercial
            // 
            this.tpgCommercial.Controls.Add(this.txtCommAccountNumber);
            this.tpgCommercial.Controls.Add(this.txtCommCustomerName);
            this.tpgCommercial.Controls.Add(this.txtCommCustomerType);
            this.tpgCommercial.Controls.Add(this.label6);
            this.tpgCommercial.Controls.Add(this.label5);
            this.tpgCommercial.Controls.Add(this.label4);
            this.tpgCommercial.Controls.Add(this.txtCommercialTotal);
            this.tpgCommercial.Controls.Add(this.lblCommercialTotal);
            this.tpgCommercial.Controls.Add(this.txtCommercial);
            this.tpgCommercial.Controls.Add(this.lblCommercialKwh);
            this.tpgCommercial.Controls.Add(this.lblCommercial);
            this.tpgCommercial.Controls.Add(this.btnClr2);
            this.tpgCommercial.Controls.Add(this.btnCommAdd);
            this.tpgCommercial.Location = new System.Drawing.Point(4, 22);
            this.tpgCommercial.Name = "tpgCommercial";
            this.tpgCommercial.Padding = new System.Windows.Forms.Padding(3);
            this.tpgCommercial.Size = new System.Drawing.Size(526, 434);
            this.tpgCommercial.TabIndex = 1;
            this.tpgCommercial.Text = "Commercial";
            this.tpgCommercial.UseVisualStyleBackColor = true;
            // 
            // txtCommAccountNumber
            // 
            this.txtCommAccountNumber.Location = new System.Drawing.Point(244, 60);
            this.txtCommAccountNumber.Name = "txtCommAccountNumber";
            this.txtCommAccountNumber.Size = new System.Drawing.Size(170, 20);
            this.txtCommAccountNumber.TabIndex = 28;
            // 
            // txtCommCustomerName
            // 
            this.txtCommCustomerName.Location = new System.Drawing.Point(244, 111);
            this.txtCommCustomerName.Name = "txtCommCustomerName";
            this.txtCommCustomerName.Size = new System.Drawing.Size(170, 20);
            this.txtCommCustomerName.TabIndex = 27;
            // 
            // txtCommCustomerType
            // 
            this.txtCommCustomerType.Location = new System.Drawing.Point(244, 167);
            this.txtCommCustomerType.Name = "txtCommCustomerType";
            this.txtCommCustomerType.Size = new System.Drawing.Size(170, 20);
            this.txtCommCustomerType.TabIndex = 26;
            // 
            // label6
            // 
            this.label6.AutoSize = true;
            this.label6.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label6.Location = new System.Drawing.Point(17, 165);
            this.label6.Name = "label6";
            this.label6.Size = new System.Drawing.Size(134, 20);
            this.label6.TabIndex = 25;
            this.label6.Text = "Customer Type:";
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label5.Location = new System.Drawing.Point(17, 109);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(142, 20);
            this.label5.TabIndex = 24;
            this.label5.Text = "Customer Name:";
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label4.Location = new System.Drawing.Point(17, 58);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(147, 20);
            this.label4.TabIndex = 23;
            this.label4.Text = "Account Number:";
            // 
            // txtCommercialTotal
            // 
            this.txtCommercialTotal.Location = new System.Drawing.Point(244, 341);
            this.txtCommercialTotal.Name = "txtCommercialTotal";
            this.txtCommercialTotal.Size = new System.Drawing.Size(137, 20);
            this.txtCommercialTotal.TabIndex = 22;
            // 
            // lblCommercialTotal
            // 
            this.lblCommercialTotal.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblCommercialTotal.Location = new System.Drawing.Point(73, 341);
            this.lblCommercialTotal.Name = "lblCommercialTotal";
            this.lblCommercialTotal.Size = new System.Drawing.Size(90, 28);
            this.lblCommercialTotal.TabIndex = 21;
            this.lblCommercialTotal.Text = "Bill Total:";
            // 
            // txtCommercial
            // 
            this.txtCommercial.Location = new System.Drawing.Point(244, 227);
            this.txtCommercial.Name = "txtCommercial";
            this.txtCommercial.Size = new System.Drawing.Size(170, 20);
            this.txtCommercial.TabIndex = 19;
            // 
            // lblCommercialKwh
            // 
            this.lblCommercialKwh.AutoSize = true;
            this.lblCommercialKwh.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblCommercialKwh.Location = new System.Drawing.Point(17, 227);
            this.lblCommercialKwh.Name = "lblCommercialKwh";
            this.lblCommercialKwh.Size = new System.Drawing.Size(199, 20);
            this.lblCommercialKwh.TabIndex = 16;
            this.lblCommercialKwh.Text = "Please enter your KWH:";
            // 
            // lblCommercial
            // 
            this.lblCommercial.AutoSize = true;
            this.lblCommercial.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblCommercial.Location = new System.Drawing.Point(17, 16);
            this.lblCommercial.Name = "lblCommercial";
            this.lblCommercial.Size = new System.Drawing.Size(111, 24);
            this.lblCommercial.TabIndex = 15;
            this.lblCommercial.Text = "Commercial";
            // 
            // btnClr2
            // 
            this.btnClr2.Location = new System.Drawing.Point(244, 269);
            this.btnClr2.Name = "btnClr2";
            this.btnClr2.Size = new System.Drawing.Size(148, 35);
            this.btnClr2.TabIndex = 14;
            this.btnClr2.Text = "&Clear";
            this.btnClr2.UseVisualStyleBackColor = true;
            this.btnClr2.Click += new System.EventHandler(this.btnClr2_Click);
            // 
            // btnCommAdd
            // 
            this.btnCommAdd.Location = new System.Drawing.Point(30, 269);
            this.btnCommAdd.Name = "btnCommAdd";
            this.btnCommAdd.Size = new System.Drawing.Size(148, 35);
            this.btnCommAdd.TabIndex = 13;
            this.btnCommAdd.Text = "&Add";
            this.btnCommAdd.UseVisualStyleBackColor = true;
            this.btnCommAdd.Click += new System.EventHandler(this.btnCommAdd_Click);
            // 
            // tpgIndustrial
            // 
            this.tpgIndustrial.Controls.Add(this.txtIndAccountNumber);
            this.tpgIndustrial.Controls.Add(this.txtIndCustomerName);
            this.tpgIndustrial.Controls.Add(this.txtIndCustomerType);
            this.tpgIndustrial.Controls.Add(this.lbl3);
            this.tpgIndustrial.Controls.Add(this.label8);
            this.tpgIndustrial.Controls.Add(this.label7);
            this.tpgIndustrial.Controls.Add(this.txtIndustrialTotal);
            this.tpgIndustrial.Controls.Add(this.lblIndustrialTotal);
            this.tpgIndustrial.Controls.Add(this.txtIndustrialPeak);
            this.tpgIndustrial.Controls.Add(this.txtIndustrialNonPeak);
            this.tpgIndustrial.Controls.Add(this.lblIndustrialKwhNonPeak);
            this.tpgIndustrial.Controls.Add(this.lblIndustrialKwhPeak);
            this.tpgIndustrial.Controls.Add(this.lblIndustrial);
            this.tpgIndustrial.Controls.Add(this.btnClr3);
            this.tpgIndustrial.Controls.Add(this.btnIndAdd);
            this.tpgIndustrial.Location = new System.Drawing.Point(4, 22);
            this.tpgIndustrial.Name = "tpgIndustrial";
            this.tpgIndustrial.Padding = new System.Windows.Forms.Padding(3);
            this.tpgIndustrial.Size = new System.Drawing.Size(526, 434);
            this.tpgIndustrial.TabIndex = 2;
            this.tpgIndustrial.Text = "Industrial";
            this.tpgIndustrial.UseVisualStyleBackColor = true;
            // 
            // txtIndAccountNumber
            // 
            this.txtIndAccountNumber.Location = new System.Drawing.Point(308, 71);
            this.txtIndAccountNumber.Name = "txtIndAccountNumber";
            this.txtIndAccountNumber.Size = new System.Drawing.Size(170, 20);
            this.txtIndAccountNumber.TabIndex = 28;
            // 
            // txtIndCustomerName
            // 
            this.txtIndCustomerName.Location = new System.Drawing.Point(308, 113);
            this.txtIndCustomerName.Name = "txtIndCustomerName";
            this.txtIndCustomerName.Size = new System.Drawing.Size(170, 20);
            this.txtIndCustomerName.TabIndex = 27;
            // 
            // txtIndCustomerType
            // 
            this.txtIndCustomerType.Location = new System.Drawing.Point(308, 167);
            this.txtIndCustomerType.Name = "txtIndCustomerType";
            this.txtIndCustomerType.Size = new System.Drawing.Size(170, 20);
            this.txtIndCustomerType.TabIndex = 26;
            // 
            // lbl3
            // 
            this.lbl3.AutoSize = true;
            this.lbl3.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lbl3.Location = new System.Drawing.Point(6, 71);
            this.lbl3.Name = "lbl3";
            this.lbl3.Size = new System.Drawing.Size(147, 20);
            this.lbl3.TabIndex = 25;
            this.lbl3.Text = "Account Number:";
            // 
            // label8
            // 
            this.label8.AutoSize = true;
            this.label8.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label8.Location = new System.Drawing.Point(6, 113);
            this.label8.Name = "label8";
            this.label8.Size = new System.Drawing.Size(142, 20);
            this.label8.TabIndex = 24;
            this.label8.Text = "Customer Name:";
            // 
            // label7
            // 
            this.label7.AutoSize = true;
            this.label7.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label7.Location = new System.Drawing.Point(6, 167);
            this.label7.Name = "label7";
            this.label7.Size = new System.Drawing.Size(134, 20);
            this.label7.TabIndex = 23;
            this.label7.Text = "Customer Type:";
            // 
            // txtIndustrialTotal
            // 
            this.txtIndustrialTotal.Location = new System.Drawing.Point(308, 358);
            this.txtIndustrialTotal.Name = "txtIndustrialTotal";
            this.txtIndustrialTotal.Size = new System.Drawing.Size(137, 20);
            this.txtIndustrialTotal.TabIndex = 22;
            // 
            // lblIndustrialTotal
            // 
            this.lblIndustrialTotal.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblIndustrialTotal.Location = new System.Drawing.Point(87, 358);
            this.lblIndustrialTotal.Name = "lblIndustrialTotal";
            this.lblIndustrialTotal.Size = new System.Drawing.Size(90, 28);
            this.lblIndustrialTotal.TabIndex = 21;
            this.lblIndustrialTotal.Text = "Bill Total:";
            // 
            // txtIndustrialPeak
            // 
            this.txtIndustrialPeak.Location = new System.Drawing.Point(308, 218);
            this.txtIndustrialPeak.Name = "txtIndustrialPeak";
            this.txtIndustrialPeak.Size = new System.Drawing.Size(170, 20);
            this.txtIndustrialPeak.TabIndex = 19;
            // 
            // txtIndustrialNonPeak
            // 
            this.txtIndustrialNonPeak.Location = new System.Drawing.Point(308, 262);
            this.txtIndustrialNonPeak.Name = "txtIndustrialNonPeak";
            this.txtIndustrialNonPeak.Size = new System.Drawing.Size(170, 20);
            this.txtIndustrialNonPeak.TabIndex = 18;
            // 
            // lblIndustrialKwhNonPeak
            // 
            this.lblIndustrialKwhNonPeak.AutoSize = true;
            this.lblIndustrialKwhNonPeak.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblIndustrialKwhNonPeak.Location = new System.Drawing.Point(6, 262);
            this.lblIndustrialKwhNonPeak.Name = "lblIndustrialKwhNonPeak";
            this.lblIndustrialKwhNonPeak.Size = new System.Drawing.Size(282, 20);
            this.lblIndustrialKwhNonPeak.TabIndex = 17;
            this.lblIndustrialKwhNonPeak.Text = "Please enter your Non-Peak KWH:";
            // 
            // lblIndustrialKwhPeak
            // 
            this.lblIndustrialKwhPeak.AutoSize = true;
            this.lblIndustrialKwhPeak.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblIndustrialKwhPeak.Location = new System.Drawing.Point(6, 218);
            this.lblIndustrialKwhPeak.Name = "lblIndustrialKwhPeak";
            this.lblIndustrialKwhPeak.Size = new System.Drawing.Size(244, 20);
            this.lblIndustrialKwhPeak.TabIndex = 16;
            this.lblIndustrialKwhPeak.Text = "Please enter your Peak KWH:";
            // 
            // lblIndustrial
            // 
            this.lblIndustrial.AutoSize = true;
            this.lblIndustrial.Font = new System.Drawing.Font("Microsoft Sans Serif", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblIndustrial.Location = new System.Drawing.Point(28, 26);
            this.lblIndustrial.Name = "lblIndustrial";
            this.lblIndustrial.Size = new System.Drawing.Size(84, 24);
            this.lblIndustrial.TabIndex = 13;
            this.lblIndustrial.Text = "Industrial";
            // 
            // btnClr3
            // 
            this.btnClr3.Location = new System.Drawing.Point(308, 303);
            this.btnClr3.Name = "btnClr3";
            this.btnClr3.Size = new System.Drawing.Size(148, 35);
            this.btnClr3.TabIndex = 12;
            this.btnClr3.Text = "&Clear";
            this.btnClr3.UseVisualStyleBackColor = true;
            this.btnClr3.Click += new System.EventHandler(this.btnClr3_Click);
            // 
            // btnExit
            // 
            this.btnExit.Font = new System.Drawing.Font("Microsoft Sans Serif", 9.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnExit.Location = new System.Drawing.Point(971, 557);
            this.btnExit.Name = "btnExit";
            this.btnExit.Size = new System.Drawing.Size(93, 26);
            this.btnExit.TabIndex = 14;
            this.btnExit.Text = "&Exit";
            this.btnExit.UseVisualStyleBackColor = true;
            this.btnExit.Click += new System.EventHandler(this.btnExit_Click);
            // 
            // lstCustomers
            // 
            this.lstCustomers.FormattingEnabled = true;
            this.lstCustomers.Location = new System.Drawing.Point(579, 27);
            this.lstCustomers.Name = "lstCustomers";
            this.lstCustomers.Size = new System.Drawing.Size(274, 420);
            this.lstCustomers.TabIndex = 15;
            // 
            // label9
            // 
            this.label9.AutoSize = true;
            this.label9.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label9.Location = new System.Drawing.Point(46, 493);
            this.label9.Name = "label9";
            this.label9.Size = new System.Drawing.Size(145, 20);
            this.label9.TabIndex = 23;
            this.label9.Text = "Total Customers:";
            // 
            // label10
            // 
            this.label10.AutoSize = true;
            this.label10.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label10.Location = new System.Drawing.Point(367, 493);
            this.label10.Name = "label10";
            this.label10.Size = new System.Drawing.Size(238, 20);
            this.label10.TabIndex = 27;
            this.label10.Text = "Sum of Residential Charges:";
            // 
            // label11
            // 
            this.label11.AutoSize = true;
            this.label11.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label11.Location = new System.Drawing.Point(367, 530);
            this.label11.Name = "label11";
            this.label11.Size = new System.Drawing.Size(241, 20);
            this.label11.TabIndex = 28;
            this.label11.Text = "Sum of Commercial Charges:";
            // 
            // label12
            // 
            this.label12.AutoSize = true;
            this.label12.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label12.Location = new System.Drawing.Point(367, 563);
            this.label12.Name = "label12";
            this.label12.Size = new System.Drawing.Size(223, 20);
            this.label12.TabIndex = 29;
            this.label12.Text = "Sum of Industrial Charges:";
            // 
            // label13
            // 
            this.label13.AutoSize = true;
            this.label13.Font = new System.Drawing.Font("Microsoft Sans Serif", 12F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label13.Location = new System.Drawing.Point(46, 557);
            this.label13.Name = "label13";
            this.label13.Size = new System.Drawing.Size(126, 20);
            this.label13.TabIndex = 30;
            this.label13.Text = "Total Charges:";
            // 
            // txtTotalCustomers
            // 
            this.txtTotalCustomers.Location = new System.Drawing.Point(197, 495);
            this.txtTotalCustomers.Name = "txtTotalCustomers";
            this.txtTotalCustomers.Size = new System.Drawing.Size(137, 20);
            this.txtTotalCustomers.TabIndex = 31;
            // 
            // txtIndustrialCharges
            // 
            this.txtIndustrialCharges.Location = new System.Drawing.Point(611, 563);
            this.txtIndustrialCharges.Name = "txtIndustrialCharges";
            this.txtIndustrialCharges.Size = new System.Drawing.Size(137, 20);
            this.txtIndustrialCharges.TabIndex = 32;
            // 
            // txtCommercialCharges
            // 
            this.txtCommercialCharges.Location = new System.Drawing.Point(611, 532);
            this.txtCommercialCharges.Name = "txtCommercialCharges";
            this.txtCommercialCharges.Size = new System.Drawing.Size(137, 20);
            this.txtCommercialCharges.TabIndex = 33;
            // 
            // txtResidentalCharges
            // 
            this.txtResidentalCharges.Location = new System.Drawing.Point(611, 495);
            this.txtResidentalCharges.Name = "txtResidentalCharges";
            this.txtResidentalCharges.Size = new System.Drawing.Size(137, 20);
            this.txtResidentalCharges.TabIndex = 34;
            // 
            // txtTotalCharges
            // 
            this.txtTotalCharges.Location = new System.Drawing.Point(197, 559);
            this.txtTotalCharges.Name = "txtTotalCharges";
            this.txtTotalCharges.Size = new System.Drawing.Size(137, 20);
            this.txtTotalCharges.TabIndex = 35;
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(1076, 595);
            this.Controls.Add(this.txtTotalCharges);
            this.Controls.Add(this.txtResidentalCharges);
            this.Controls.Add(this.txtCommercialCharges);
            this.Controls.Add(this.txtIndustrialCharges);
            this.Controls.Add(this.txtTotalCustomers);
            this.Controls.Add(this.label13);
            this.Controls.Add(this.label12);
            this.Controls.Add(this.label11);
            this.Controls.Add(this.label10);
            this.Controls.Add(this.label9);
            this.Controls.Add(this.lstCustomers);
            this.Controls.Add(this.btnExit);
            this.Controls.Add(this.tabCalculate);
            this.Controls.Add(this.btnClear);
            this.Name = "Form1";
            this.Text = "Form1";
            this.FormClosing += new System.Windows.Forms.FormClosingEventHandler(this.Form1_FormClosing);
            this.Load += new System.EventHandler(this.Form1_Load);
            this.tabCalculate.ResumeLayout(false);
            this.tpgResidential.ResumeLayout(false);
            this.tpgResidential.PerformLayout();
            this.tpgCommercial.ResumeLayout(false);
            this.tpgCommercial.PerformLayout();
            this.tpgIndustrial.ResumeLayout(false);
            this.tpgIndustrial.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion
        private System.Windows.Forms.Button btnIndAdd;
        private System.Windows.Forms.Button btnClear;
        private System.Windows.Forms.TabControl tabCalculate;
        private System.Windows.Forms.TabPage tpgResidential;
        private System.Windows.Forms.Button btnClr;
        private System.Windows.Forms.Button btnResAdd;
        private System.Windows.Forms.TabPage tpgCommercial;
        private System.Windows.Forms.Label lblCommercial;
        private System.Windows.Forms.Button btnClr2;
        private System.Windows.Forms.Button btnCommAdd;
        private System.Windows.Forms.TabPage tpgIndustrial;
        private System.Windows.Forms.Label lblIndustrial;
        private System.Windows.Forms.Button btnClr3;
        private System.Windows.Forms.TextBox txtResidential;
        private System.Windows.Forms.Label lbl1;
        private System.Windows.Forms.Label lblResidential;
        private System.Windows.Forms.TextBox txtCommercial;
        private System.Windows.Forms.Label lblCommercialKwh;
        private System.Windows.Forms.TextBox txtIndustrialPeak;
        private System.Windows.Forms.TextBox txtIndustrialNonPeak;
        private System.Windows.Forms.Label lblIndustrialKwhNonPeak;
        private System.Windows.Forms.Label lblIndustrialKwhPeak;
        private System.Windows.Forms.TextBox txtResidentialTotal;
        private System.Windows.Forms.Label lbl2;
        private System.Windows.Forms.TextBox txtCommercialTotal;
        private System.Windows.Forms.Label lblCommercialTotal;
        private System.Windows.Forms.TextBox txtIndustrialTotal;
        private System.Windows.Forms.Label lblIndustrialTotal;
        private System.Windows.Forms.Button btnExit;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.ListBox lstCustomers;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.TextBox txtResAccountNumber;
        private System.Windows.Forms.TextBox txtResCustomerType;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.TextBox txtResCustomerName;
        private System.Windows.Forms.TextBox txtCommAccountNumber;
        private System.Windows.Forms.TextBox txtCommCustomerName;
        private System.Windows.Forms.TextBox txtCommCustomerType;
        private System.Windows.Forms.Label label6;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.TextBox txtIndAccountNumber;
        private System.Windows.Forms.TextBox txtIndCustomerName;
        private System.Windows.Forms.TextBox txtIndCustomerType;
        private System.Windows.Forms.Label lbl3;
        private System.Windows.Forms.Label label8;
        private System.Windows.Forms.Label label7;
        private System.Windows.Forms.Label label9;
        private System.Windows.Forms.Label label10;
        private System.Windows.Forms.Label label11;
        private System.Windows.Forms.Label label12;
        private System.Windows.Forms.Label label13;
        private System.Windows.Forms.TextBox txtTotalCustomers;
        private System.Windows.Forms.TextBox txtIndustrialCharges;
        private System.Windows.Forms.TextBox txtCommercialCharges;
        private System.Windows.Forms.TextBox txtResidentalCharges;
        private System.Windows.Forms.TextBox txtTotalCharges;
    }
}

