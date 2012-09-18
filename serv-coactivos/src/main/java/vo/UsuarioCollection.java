package vo;

import java.util.Collection;

import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlElementWrapper;
import javax.xml.bind.annotation.XmlRootElement;

import model.User;
import model.Usuario;

@XmlRootElement(name = "response")
public class UsuarioCollection {

    private Collection<Usuario> usuarios;
    
    public UsuarioCollection() {
    }

    public UsuarioCollection(Collection<Usuario> usuarios) {
        this.usuarios = usuarios;
    }

    @XmlElement(name="usuario")
    @XmlElementWrapper(name="usuarios")
    public Collection<Usuario> getUsers() {
        return usuarios;
    }

}
