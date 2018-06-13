package Entidade;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;

public class ConectaBanco
{
    public Connection CriaConexao()
    {
        Connection conexao = null;
        String usuario = "postgres";
        String senha = "1234";
        String nomeBancoDados = "Adoption";

        try
        {
            Class.forName("org.postgresql.Driver");
            conexao = DriverManager.getConnection("jdbc:postgresql://localhost:5433/" + nomeBancoDados, usuario, senha);
        }
        catch (Exception e)
        {
            e.printStackTrace();
        }
        return conexao;
    }

    public final void SalvarObjeto(String sql) throws SQLException
    {
        Connection con = CriaConexao();

        Statement stm = con.createStatement();
        stm.execute(sql);
        con.commit();
    }
}