import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
@WebServlet("/ajaxjdbcServlet")
public class ajaxjdbcServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.setContentType("text/html");
		PrintWriter out=response.getWriter();
		try {
			Class.forName("com.mysql.jdbc.Driver");
			String URL="jdbc:mysql://localhost:3307/student";
			Connection con=DriverManager.getConnection(URL,"root","");
			String query="select * from details where rno=?";
			PreparedStatement ps=con.prepareStatement(query);
			ps.setString(1,request.getParameter("q"));
			ResultSet res=ps.executeQuery();
			if(res.next())
			{
			out.println("<h2> Your Roll No is : "+ res.getInt("rno")+"</h2><br>");
			out.println("<h2> Your Name is : "+res.getString("name")+"</h2><br>");
			out.println("<h2> Your Age is : "+res.getInt("age")+"</h2><br>");
			out.println("<h2> Your Gender is : "+res.getString("gender")+"</h2><br>");
			}
			else {
                out.println("<p>No student found with registration number: " + request.getParameter("reg") + "</p>");
			}
			ps.close();
			con.close();
		}
		catch(Exception e) {
			out.println(e);
		}
		
	}

}
