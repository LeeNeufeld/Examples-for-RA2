using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Conversions
{
    //collection of validation methods
    // every method assumes that the controls have tag property set
    public static class validator
    {
        private static int parsedValue;

        // checks if text box is not empty
        public static bool IsPresent(TextBox tb)
        {
            bool result = true;
            if (tb.Text == "")
            {
                MessageBox.Show(tb.Tag + "Has to be provided", "Input Error");
                result = false;
                tb.Focus();

            }
            return result;
        }

        public static bool IsInteger(TextBox tb)
        {
            bool result = true;
            int parsedValue;
            if (!Int32.TryParse(tb.Text, out parsedValue))
            {
                MessageBox.Show(tb.Tag + "Has to be a whole number", "Input Error");
                result = false;
                tb.Focus();
            }
            return result;
        }

        internal static bool IsDecimalInRange(TextBox txtMonthlyInvestment)
        {
            throw new NotImplementedException();
        }

        public static bool IsDouble(TextBox tb)
        {
            bool result = true;
            double parsedValue;
            if (!Double.TryParse(tb.Text, out parsedValue))
            {
                MessageBox.Show(tb.Tag + "Has to be a Decimal", "Input Error");
                result = false;
                tb.Focus();
            }
            return result;
        }

        public static bool IsNonNegative(TextBox tb)
        {
            bool result = true;
            int parsedValue = Int32.Parse(tb.Text);
            if (parsedValue < 0)
            {
                MessageBox.Show(tb.Tag + "Has to be Positive", "Input Error");
                result = false;
                tb.Focus();
            }
            return result;
        }

        public static bool IsNonNegativeDouble(TextBox tb)
        {
            bool result = true;
            double parsedValue = Double.Parse(tb.Text);
            if (parsedValue < 0)
            {
                MessageBox.Show(tb.Tag + "Has to be Postitive", "Input Error");
                result = false;
                tb.Focus();
            }
            return result;
        }

        public static bool IsDecimal(TextBox tb)
        {
            bool result = true;
            decimal parsedValue;
            if (!Decimal.TryParse(tb.Text, out parsedValue))
            {
                MessageBox.Show(tb.Tag + "Has to be a Decimal", "Input Error");
                result = false;
                tb.Focus();
            }
            return result;
        }
        public static bool IsDecimalInRange(TextBox tb, decimal minValue, decimal maxValue)
        {
            bool result = true;
            decimal parsedValue = Decimal.Parse(tb.Text);
            if (parsedValue < minValue || parsedValue > maxValue)
            {
                MessageBox.Show(tb.Tag + "Has to be between", minValue.ToString() + "and" + maxValue.ToString());
                result = false;
                tb.Focus();
            }
            return result;
        }
    }
}
