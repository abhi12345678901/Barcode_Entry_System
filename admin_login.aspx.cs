using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;
using System.Data.SqlClient;

public partial class admin_login : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }
    protected void btnlogin_Click(object sender, EventArgs e)
    {
          SqlConnection cnn = new SqlConnection(@"Data Source=.\SQLEXPRESS;AttachDbFilename=|DataDirectory|\Database.mdf;Integrated Security=True;User Instance=True");
        string sql = "select * from signup where emailid='" + txtemailid.Text + "' and password='" + txtpassword.Text + "'";
        SqlDataAdapter da = new SqlDataAdapter(sql, cnn);
        DataSet ds = new DataSet();
        da.Fill(ds, "a");
        if (ds.Tables["a"].Rows.Count > 0)
        {
            Session["emailid"] = txtemailid.Text;
            Session.Timeout = 5;
            Response.Redirect("home.aspx");
        }
        else
        {
            lblmsg.Text = "Invalid......";
        }
    }
    }
