package hibernatePersistence.pessoa;

import java.io.Serializable;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;

@Entity
public class Pessoa implements Serializable
{
    private String nome;
    @Id
    private String cpf;
    private String telefone;
    private String endereco;
    private String email;
    private String senha;

    public final String getNome() //get pegar
    {
        return nome;
    }

    public final void setNome(String value) //set definir
    {
        nome = value;
    }
    
    public final String getCpf() //get pegar
    {
        return cpf;
    }

    public final void setCpf(String value) //set definir
    {
        cpf = value;
    }
    
     public final String getTelefone() //get pegar
    {
        return telefone;
    }
      
    public final void setTelefone(String value) //set definir
    {
        telefone = value;
    }
   
    public final String getEndereco() //get pegar
    {
        return endereco;
    }

    public final void setEndereco(String value) //set definir
    {
        endereco = value;
    }
    
    public final String getEmail()
    {
        return email;
    }

    public final void setEmail(String value)
    {
        email = value;
    }

    public final String getSenha()
    {
        return senha;
    }

    public final void setSenha(String value)
    {
        senha = value;
    }
       
    public Pessoa(String email)
    {
        super();
        this.email = email;
    }

    public Pessoa(String email, String nome)
    {
        super();
        this.email = email;
        this.nome = nome;
    }
    
    public Pessoa()
    {
    }
}
