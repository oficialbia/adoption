package hibernatePersistence.conexao;

import hibernatePersistence.util.HibernateUtil;
import org.hibernate.Session;

public class ConectarBanco
{
    public static Session Conectar()
    {
        Session sessao = HibernateUtil.getSessionFactory().openSession();
        System.out.println("Conectou!");
        return sessao;
    }
}
