package hibernatePersistence.pessoa;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.SQLException;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class CadastroPessoa extends HttpServlet
{
    /**
     * Processes requests for both HTTP <code>GET</code> and <code>POST</code>
     * methods.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    protected void processRequest(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException, SQLException
    {
        PessoaDAO pessoaHibernateDAO = new PessoaDAO();
        Pessoa pessoa = new Pessoa();
        pessoa.setNome(request.getParameter("nome"));
        pessoa.setCpf(request.getParameter("cpf"));
        pessoa.setTelefone(request.getParameter("telefone"));
        pessoa.setEndereco(request.getParameter("endereco"));
        pessoa.setEmail(request.getParameter("email"));
        pessoa.setSenha(request.getParameter("senha"));
        
        pessoaHibernateDAO.salvar(pessoa);
                
        // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
        /**
         * Handles the HTTP <code>GET</code> method.
         *
         * @param request servlet request
         * @param response servlet response
         * @throws ServletException if a servlet-specific error occurs
         * @throws IOException if an I/O error occurs
         */
    }
}