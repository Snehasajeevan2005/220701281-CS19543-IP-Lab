

import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
@WebServlet("/ajax2Servlet")
public class ajax2Servlet extends HttpServlet {
    private static final long serialVersionUID = 1L;
    public String[] students = {"John", "Jane", "James", "Jennifer", "Jack", "Julia", "Jacob", "Swetha", "Sneha", "Shiny","Sharon","Shaik","Naveen", "Prasanth", "Varun", "Tharun", "Lakshitha", "Rahul", "Bhuvaneswari", "Monica"};
    public void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        String query = request.getParameter("q").toLowerCase();
        response.setContentType("text/html");
        PrintWriter out = response.getWriter();
        for (int j = 0; j < students.length; j++) {
            String i = students[j];
            if (i.toLowerCase().startsWith(query)) {
                out.println("<p>" + i + "</p>");
            }
        }

    }
}
