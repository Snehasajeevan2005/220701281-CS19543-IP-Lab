import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;


@WebServlet("/formservlet")
public class formservlet extends HttpServlet {

	
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		response.setContentType("text/html");
		PrintWriter out = response.getWriter();
		
		String name = request.getParameter("name");
		String rollno = request.getParameter("rollno");
		String gender = request.getParameter("gender");
		String year = request.getParameter("year");
		String department = request.getParameter("department");
		String section = request.getParameter("section");
		String mobile_no = request.getParameter("mobile_no");
		String email = request.getParameter("email");
		String address = request.getParameter("address");
		String city = request.getParameter("city");
		String country = request.getParameter("country");
		String pincode = request.getParameter("pincode");
		
		
	   
		out.println("<html><head>");
		out.println("<style>");
		out.println("table { border-collapse: collapse; width: 50%; margin:  auto; }");
		out.println("th, td { padding: 10px; text-align: left; border: 1px solid #ddd; }");
		out.println("h2 { text-align: center; color: blue; }");
		out.println("tr:nth-child(even) { background-color: #f2f2f2; }");
		out.println("</style>");
		out.println("</head><body>");

		out.println("<h2>Registered Details</h2>");

		out.println("<table>");
		out.println("<tr><td><b>Student Name:</b></td><td>" + name + "</td></tr>");
		out.println("<tr><td><b>Roll Number:</b></td><td>" + rollno + "</td></tr>");
		out.println("<tr><td><b>Gender:</b></td><td>" + gender + "</td></tr>");
		out.println("<tr><td><b>Year:</b></td><td>" + year + "</td></tr>");
		out.println("<tr><td><b>Department:</b></td><td>" + department + "</td></tr>");
		out.println("<tr><td><b>Section:</b></td><td>" + section + "</td></tr>");
		out.println("<tr><td><b>Mobile Number:</b></td><td>" + mobile_no + "</td></tr>");
		out.println("<tr><td><b>Email:</b></td><td>" + email + "</td></tr>");
		out.println("<tr><td><b>Address:</b></td><td>" + address + "</td></tr>");
		out.println("<tr><td><b>City:</b></td><td>" + city + "</td></tr>");
		out.println("<tr><td><b>Country:</b></td><td>" + country + "</td></tr>");
		out.println("<tr><td><b>Pincode:</b></td><td>" + pincode + "</td></tr>");
		out.println("</table>");
		
		out.println("</body></html>");


		
		

	}
}
