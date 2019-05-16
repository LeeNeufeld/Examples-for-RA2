using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using OrderData;




namespace Neufeld_Lee_CPRG200_Lab4
// Author: Lee Neufeld
// Date: April/23/2019
// Purpose: CPRG 200 Lab 4
// Create windows form to display data and update
{
    public partial class frmOrder : Form
    {
        const int EDIT_BUTTON_INDX = 5; // button column constant
        List<Order> orders;
        
        public frmOrder()
        {
            InitializeComponent();
        }

        // DB form load
        private void Form1_Load(object sender, EventArgs e)
        {
            try
            {
                orders = OrderDB.GetAllOrders();
                orderDataGridView.DataSource = orders;
            }
            catch (Exception ex)
            {
                MessageBox.Show("Error while loading customers data: " + ex.Message, ex.GetType().ToString());
            }

        }

       
        // edit button funtionality
        private void orderDataGridView_CellContentClick_1(object sender, DataGridViewCellEventArgs e)
        {
            if (e.ColumnIndex == EDIT_BUTTON_INDX)// user click in the buttons column
            {
                
                frmUpdate updateForm = new frmUpdate();
                updateForm.order = orders[e.RowIndex];// pass current customer to the update form
                DialogResult result = updateForm.ShowDialog(); // display modal
                if (result == DialogResult.OK)// update accepted
                {
                    // refresh the grid contents
                    CurrencyManager cm = (CurrencyManager)orderDataGridView.BindingContext[orders];
                    cm.Refresh();
                }
                else // update cancelled
                {
                    
                    orders = OrderDB.GetAllOrders();
                    orderDataGridView.DataSource = orders;
                }
            }
        }
    }
}
