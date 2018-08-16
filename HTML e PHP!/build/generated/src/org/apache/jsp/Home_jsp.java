package org.apache.jsp;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;

public final class Home_jsp extends org.apache.jasper.runtime.HttpJspBase
    implements org.apache.jasper.runtime.JspSourceDependent {

  private static final JspFactory _jspxFactory = JspFactory.getDefaultFactory();

  private static java.util.List<String> _jspx_dependants;

  private org.glassfish.jsp.api.ResourceInjector _jspx_resourceInjector;

  public java.util.List<String> getDependants() {
    return _jspx_dependants;
  }

  public void _jspService(HttpServletRequest request, HttpServletResponse response)
        throws java.io.IOException, ServletException {

    PageContext pageContext = null;
    HttpSession session = null;
    ServletContext application = null;
    ServletConfig config = null;
    JspWriter out = null;
    Object page = this;
    JspWriter _jspx_out = null;
    PageContext _jspx_page_context = null;

    try {
      response.setContentType("text/html");
      pageContext = _jspxFactory.getPageContext(this, request, response,
      			null, true, 8192, true);
      _jspx_page_context = pageContext;
      application = pageContext.getServletContext();
      config = pageContext.getServletConfig();
      session = pageContext.getSession();
      out = pageContext.getOut();
      _jspx_out = out;
      _jspx_resourceInjector = (org.glassfish.jsp.api.ResourceInjector) application.getAttribute("com.sun.appserv.jsp.resource.injector");

      out.write("<!DOCTYPE html>\n");
      out.write("<html lang=\"br\">\n");
      out.write("    <head>\n");
      out.write("        <meta charset=\"UTF-8\">\n");
      out.write("        <title>Adoption</title>\n");
      out.write("        <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />\n");
      out.write("        <meta name=\"description\" content=\"\" />\n");
      out.write("        <meta name=\"keywords\" content=\"\" />\n");
      out.write("        <!--[if lte IE 8]><script src=\"js/html5shiv.js\"></script><![endif]-->\n");
      out.write("        <script src=\"js/jquery.min.js\"></script>\n");
      out.write("        <script src=\"js/skel.min.js\"></script>\n");
      out.write("        <script src=\"js/skel-layers.min.js\"></script>\n");
      out.write("        <script src=\"js/init.js\"></script>\n");
      out.write("        <noscript>\n");
      out.write("        <link rel=\"stylesheet\" href=\"css/skel.css\" />\n");
      out.write("        <link rel=\"stylesheet\" href=\"css/style.css\" />\n");
      out.write("        <link rel=\"stylesheet\" href=\"css/style-xlarge.css\" />\n");
      out.write("        </noscript>\n");
      out.write("    </head>\n");
      out.write("    <body class=\"landing\">\n");
      out.write("\n");
      out.write("        <!-- Header -->\n");
      out.write("        <header id=\"header\">\n");
      out.write("            <h1><a href=\"Home.jsp\"></a></h1>\n");
      out.write("            <nav id=\"nav\">\n");
      out.write("                <ul>\n");
      out.write("                    <li><a href=\"Home.jsp\">Início</a></li>\n");
      out.write("                    <li><a href=\"Sobre.jsp\">Sobre nós</a></li>\n");
      out.write("                    <li><a href=\"Login.jsp\" class=\"button special\">Login</a></li>\n");
      out.write("                </ul>\n");
      out.write("            </nav>\n");
      out.write("        </header>\n");
      out.write("\n");
      out.write("        <!-- Banner -->\n");
      out.write("        <section id=\"banner\">\n");
      out.write("            <h2>Adoption</h2>\n");
      out.write("             <h2>Seja bem-vindo *-*</h2>\n");
      out.write("            <ul class=\"actions\">\n");
      out.write("                <li>\n");
      out.write("                    <a href=\"CadastroUser.jsp\" class=\"button big\">Cadastre-se</a>\n");
      out.write("                </li>\n");
      out.write("            </ul>\n");
      out.write("        </section>\n");
      out.write("        \n");
      out.write("        <!-- Footer -->\n");
      out.write("        <footer id=\"footer\">\n");
      out.write("\n");
      out.write("\n");
      out.write("        </section>\n");
      out.write("        <div class=\"row\">\n");
      out.write("            <div class=\"8u 12u(medium)\">\n");
      out.write("                <ul class=\"copyright\">\n");
      out.write("                    <li>&copy; 2018. All rights reserved.</li>\n");
      out.write("                </ul>\n");
      out.write("            </div>\n");
      out.write("            <div class=\"4u 12u(medium)\">\n");
      out.write("                <ul class=\"icons\">\n");
      out.write("                    <li>\n");
      out.write("                        <a href=\"http://www.facebook.com\" class=\"icon rounded fa-facebook\"><span class=\"label\">Facebook</span></a>\n");
      out.write("                    </li>\n");
      out.write("                    <li>\n");
      out.write("                        <a href=\"http://www.twitter.com\" class=\"icon rounded fa-twitter\"><span class=\"label\">Twitter</span></a>\n");
      out.write("                    </li>\n");
      out.write("                    <li>\n");
      out.write("                        <a href=\"http://www.gmail.com\" class=\"icon rounded fa-google-plus\"><span class=\"label\">Google+</span></a>\n");
      out.write("                    </li>\n");
      out.write("                </ul>\n");
      out.write("            </div>\n");
      out.write("        </div>\n");
      out.write("</footer>\n");
      out.write("\n");
      out.write("</body>\n");
      out.write("</html>");
    } catch (Throwable t) {
      if (!(t instanceof SkipPageException)){
        out = _jspx_out;
        if (out != null && out.getBufferSize() != 0)
          out.clearBuffer();
        if (_jspx_page_context != null) _jspx_page_context.handlePageException(t);
        else throw new ServletException(t);
      }
    } finally {
      _jspxFactory.releasePageContext(_jspx_page_context);
    }
  }
}
