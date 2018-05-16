package hibernatePersistence.pessoa;

import hibernatePersistence.conexao.ConectarBanco;
import hibernatePersistence.util.HibernateUtil;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import org.hibernate.*;

public class PessoaDAO {

    private Session session;
    private Transaction transaction;

    public void salvar(Pessoa pessoa) {
        try {
            this.session = HibernateUtil.getSessionFactory().openSession();
            this.transaction = this.session.beginTransaction();
            this.session.save(pessoa);
            this.transaction.commit();
            System.out.println("entrou aqui");
        } catch (HibernateException e) {
            System.out.println("Não foi possível inserir. Erro:" + e.getMessage());
        } finally {
            try {
                if (this.session.isOpen()) {
                    this.session.close();
                }
            } catch (Throwable e) {
                System.out.println("Erro ao fechar a operação. Mensagem:" + e.getMessage());
            }
        }
    }

    public boolean existe(Pessoa pessoa) {
        boolean existe = false;
        try {
            Session sessao = ConectarBanco.Conectar();
            Pessoa user = null;
            user = (Pessoa) sessao.createQuery("from Pessoa where email = ?").setParameter(0, pessoa.getEmail()).uniqueResult();

            if (user != null) {
                existe = true;
            }
            sessao.close();
        } catch (Exception e) {
            e.printStackTrace();
        }
        return existe;
    }

    public Pessoa getPessoa(String email, String senha) {
        Pessoa user = null;
        Session sessao = ConectarBanco.Conectar();
        try {
            user = (Pessoa) sessao.createQuery("from Pessoa where email = ? and senha = ?").setParameter(0, email).setParameter(1, senha).uniqueResult();
            System.out.println("entrei no try");            
        } catch (HibernateException e) {
            e.printStackTrace();
        } finally {
            sessao.close();
        }
        return user;
    }
}
