using Conversions;
using CustomerData;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;


namespace LeeNeufeld_CPRG200_Lab1
{
    public  partial class frmUtilityCalc : Form
    {
        /* CPRG200 Lab 1
         * Author: Lee Neufeld
         * Date: April, 8th, 2019
         * 
         */

            //defined constraints
        const decimal resFixRate = 6;
        const decimal resRate = 0.052m;
        const decimal commFixRate = 60;
        const decimal commRate = 0.045m;
        const decimal indPeakFixRate = 76;
        const decimal indPeakRate = 0.065m;
        const decimal indOffPeakFixRate = 40;
        const decimal indOffPeakRate = 0.028m;
        List<Customer> customerList = new List<Customer>();
        decimal totalCharges = 0;
        
         
        public frmUtilityCalc()
        {
            InitializeComponent();
        }

        // Residental calculate and add to file
        public void btnResAdd_Click(object sender, EventArgs e)
        {
            if (validator.IsInteger(txtResidential) &&
               validator.IsPresent(txtResidential) &&
                validator.IsNonNegative(txtResidential)&&
                validator.IsInteger(txtResAccountNumber)&&
                validator.IsPresent(txtResAccountNumber)&&
                 validator.IsPresent(txtResCustomerName)&&
                  validator.IsPresent(txtResCustomerType))  // Negitive number error handling
            {
                decimal resKwh; // Input: KWH Residential
                decimal resBillTotal; // output: Bill Total
                int acctNo;
                string customerName = txtResCustomerName.Text;
                string customerType = txtResCustomerType.Text;
                decimal chargeAmount;

                

                acctNo = Convert.ToInt32(txtResAccountNumber.Text); // account number


                resKwh = Convert.ToDecimal(txtResidential.Text); //Get KWH Residential

                chargeAmount = resBillTotalCalc(resFixRate, resRate, resKwh); //display charge amount

                resBillTotal = resBillTotalCalc(resFixRate, resRate, resKwh); //calculate bill amount Residential

                Customer newCus = new Customer(customerName, acctNo, customerType, chargeAmount); // add to list
                customerList.Add(newCus);

                txtResidentialTotal.Text = resBillTotal.ToString("c"); // Display Total

                

                totalCharges += newCus.ChargeAmount;

            }
            DisplayCustomers();
            



        }

        //calculate bill amount Residential
        public decimal resBillTotalCalc(decimal resFixRate, decimal resRate, decimal resKwh)
        {
            return resFixRate + (resRate * resKwh); //calculate bill amount Residential
        }

        // Clear Residential data
        private void btnClr_Click(object sender, EventArgs e)
        {
            txtResidential.Text = "";
            txtResidentialTotal.Text = "";
            tabCalculate.SelectedTab = tpgResidential;
        }

        // Commercial calculate and add to file
        private void btnCommAdd_Click(object sender, EventArgs e)
        {
            int acctNo;
            string customerName = txtCommCustomerName.Text;
            string customerType = txtCommCustomerType.Text;
            decimal chargeAmount;

            if (validator.IsInteger(txtCommercial) &&
                validator.IsPresent(txtCommercial) &&
                validator.IsNonNegative(txtCommercial)&&
                validator.IsNonNegative(txtCommAccountNumber)&&
                validator.IsInteger(txtCommAccountNumber)&&
                validator.IsPresent(txtCommAccountNumber)&&
                 validator.IsPresent(txtCommCustomerName)&&
                  validator.IsPresent(txtCommCustomerType))  // Negitive number error handling
            {
                decimal commKwh; //Input: KWH Commercial
                decimal commBillTotal; //Output: Bill Total

                acctNo = Convert.ToInt32(txtCommAccountNumber.Text);
                commKwh = Convert.ToDecimal(txtCommercial.Text); //Get KWH Commercial
                chargeAmount = commBillTotalCalc(commFixRate, commRate, commKwh);
                Customer newCus = new Customer(customerName, acctNo, customerType, chargeAmount);
                customerList.Add(newCus);
                totalCharges += newCus.ChargeAmount;

                //Calculate Bill Amount

                if (commKwh >= 1000)
                {
                    commBillTotal = commBillTotalCalc(commFixRate, commRate, commKwh);
                    txtCommercialTotal.Text = commBillTotal.ToString("c");
                }
                else
                {
                    commBillTotal = commFixRate;
                    txtCommercialTotal.Text = commBillTotal.ToString("c");
                }
            }
            DisplayCustomers();

        }
        public decimal commBillTotalCalc(decimal commFixRate, decimal commRate, decimal commKwh)
        {
            return commFixRate + (commRate * (commKwh -1000)); //calculate bill amount Commercial
        }

        // Clear Commercial data
        private void btnClr2_Click(object sender, EventArgs e)
        {
            txtCommercial.Text = "";
            txtCommercialTotal.Text = "";
            tabCalculate.SelectedTab = tpgResidential;
        }

        private void btnIndAdd_Click(object sender, EventArgs e)
        {
            if (validator.IsInteger(txtIndustrialPeak) &&
                validator.IsInteger(txtIndustrialNonPeak) &&
                validator.IsPresent(txtIndustrialNonPeak) &&
                validator.IsPresent(txtIndustrialPeak) &&
                validator.IsNonNegative(txtIndustrialPeak) && // Negitive number error handling
                validator.IsNonNegative(txtIndustrialNonPeak)
                 validator.IsNonNegative(txtIndAccountNumber) &&
                validator.IsInteger(txtIndAccountNumber) &&
                validator.IsPresent(txtIndAccountNumber) &&
                 validator.IsPresent(txtIndCustomerName) &&
                  validator.IsPresent(txtIndCustomerType))  // Negitive number error handling
            {
                decimal indPeakKwh;
                decimal indOffPeakKwh;
                decimal indPeakTotal;
                decimal indOffPeakTotal;
                decimal indBillTotal;
                int acctNo;
                string customerName = txtIndCustomerName.Text;
                string customerType = txtIndCustomerType.Text;
                decimal chargeAmount;

                indPeakKwh = Convert.ToDecimal(txtIndustrialPeak.Text);  // Get peak KWH
                indOffPeakKwh = Convert.ToDecimal(txtIndustrialNonPeak.Text); //Get off peak KWH
                acctNo = Convert.ToInt32(txtIndAccountNumber.Text);


                // Calculate Industrial KWH
                if (indPeakKwh >= 1000 &&
                    indOffPeakKwh >= 1000)
                {
                    indPeakTotal = indBillTotalCalc(indPeakFixRate, indPeakRate, indPeakKwh);
                    indOffPeakTotal = indBillTotalCalc(indOffPeakFixRate, indOffPeakRate, indOffPeakKwh);
                    indBillTotal = indPeakTotal + indOffPeakTotal;
                    txtIndustrialTotal.Text = indBillTotal.ToString("c");
                }
                else if (indOffPeakKwh >= 1000)
                {
                    indPeakTotal = indBillTotalCalc(indPeakFixRate, indPeakRate, indPeakKwh);
                    indOffPeakTotal = indOffPeakFixRate;
                    indBillTotal = indPeakTotal + indOffPeakTotal;
                    txtIndustrialTotal.Text = indBillTotal.ToString("c");
                }
                else if (indPeakKwh >= 1000)
                {
                    indPeakTotal = indPeakFixRate;
                    indOffPeakTotal = indBillTotalCalc(indOffPeakFixRate, indOffPeakRate, indOffPeakKwh);
                    indBillTotal = indPeakTotal + indOffPeakTotal;
                    txtIndustrialTotal.Text = indBillTotal.ToString("c");
                }
                else
                {
                    indPeakTotal = indPeakFixRate;
                    indOffPeakTotal = indOffPeakFixRate;
                    indBillTotal = indPeakTotal + indOffPeakTotal;
                    txtIndustrialTotal.Text = indBillTotal.ToString("c");
                }
                chargeAmount = indBillTotal;
                Customer newCus = new Customer(customerName, acctNo, customerType, chargeAmount);
                customerList.Add(newCus);
                totalCharges += newCus.ChargeAmount;
            }
            DisplayCustomers();
        }
        public decimal indBillTotalCalc(decimal indFixRate, decimal indRate, decimal indKwh)
        {
            return indFixRate + (indRate * (indKwh - 1000)); //calculate bill amount Industrial
        }
        
        // Clear Industrial inputs
        private void btnClr3_Click(object sender, EventArgs e)
        {
            txtIndustrialNonPeak.Text = "";
            txtIndustrialPeak.Text = "";
            txtIndustrialTotal.Text = "";
            tabCalculate.SelectedTab = tpgResidential;

        }
     

        private void btnExit_Click(object sender, EventArgs e)
        {
            this.Close(); // close program
        }

        // Read Text file on form load
        private void Form1_Load(object sender, EventArgs e)
        {
            customerList = Customer.GetCustomers();
            totalCharges = CalculateTotal();
            DisplayCustomers();
        }

        // Display data in list
        public void DisplayCustomers()
        {
            lstCustomers.Items.Clear();
            foreach (Customer c in customerList)
                lstCustomers.Items.Add(c);
            txtTotalCustomers.Text = customerList.Count.ToString();
            txtTotalCharges.Text = totalCharges.ToString("c");
        }

        // calculate total charges and display from list
        public decimal CalculateTotal()
        {
            decimal total = 0;
            foreach (Customer c in customerList)
                total += c.ChargeAmount;
            return total;
        }

        // save data before closing
        private void Form1_FormClosing(object sender, FormClosingEventArgs e)
        {
            Customer.SaveCustomers(customerList);
        }
    }
}
