using OrderData;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Neufeld_Lee_CPRG200_Lab4
// Author: Lee Neufeld
// Date: April/23/2019
// Purpose: CPRG 200 Lab 4
// Create windows form to display data and update
{
    public partial class frmUpdate : Form
    {
        public Order order;
        private Order oldOrder;
        public frmUpdate()
        {
            InitializeComponent();
        }

        private void frmUpdate_Load(object sender, EventArgs e)
        {
            // load the order data
            List<Order> shipped = OrderDB.GetAllOrders();
         
            // clone the order
            oldOrder = order.Clone();
            // bind controls to order object
            orderBindingSource.Clear();
            orderBindingSource.Add(order);
        }

        // Accept data update and validate
        private void btnAccept_Click(object sender, EventArgs e)
        {
            if (IsValidDateShipped())
            {
                try
                {
                    bool success = OrderDB.UpdateCustomer(oldOrder, order);
                    if (success)
                    {
                        MessageBox.Show("Update Successful", "Yay");
                        this.DialogResult = DialogResult.OK;

                    }
                    else
                    {
                        MessageBox.Show("Another user updated or deleted the record. Try again.", "Concurrency Issue");
                        this.DialogResult = DialogResult.Retry;// closes the form
                    }
                }
                catch (Exception ex)
                {
                    MessageBox.Show("Error during update:" + ex.Message, ex.GetType().ToString());
                    //this.DialogResult = DialogResult.Retry;
                }
            }
        }

        // date error handling
        // checks for date update to be later than the order date and earlier than the required date
        private bool IsValidDateShipped()
        {
            bool valid = true; // empty is valid
            DateTime requiredDate;
            
           
            if (shippedDateDateTimePicker.Text != "")// if not empty
            {
                if (DateTime.TryParse(requiredDateDateTimePicker.Text, out requiredDate))//valid date
                {
                    DateTime shippedDate = Convert.ToDateTime(shippedDateDateTimePicker.Text);
                    DateTime orderDate = Convert.ToDateTime(orderDateDateTimePicker.Text);
                    if (shippedDate >= requiredDate)// ship date is earlier than required date
                    {
                        valid = false;
                        MessageBox.Show("Date shipped must be earlier than Date required", "Data Error");

                        shippedDateDateTimePicker.Focus();
                    }

                    else if (shippedDate <= orderDate) // ship date is later than order date
                    {
                        valid = false;
                        MessageBox.Show("Date shipped must be later than Date ordered", "Data Error");

                        shippedDateDateTimePicker.Focus();

                    }
                }
            
            }
            return valid;
        }

        // cancel update
        private void btnCancel_Click(object sender, EventArgs e)
        {
            this.DialogResult = DialogResult.Retry; // anything but ok
        }
    }
}
