package service.impl;

import java.util.ArrayList;
import java.util.List;

import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;
import javax.persistence.Query;
import javax.ws.rs.core.Context;
import javax.ws.rs.core.Request;
import javax.ws.rs.core.UriInfo;

import org.springframework.test.context.ContextConfiguration;

import com.alfa.consulting.persistencia.entidades.Cliente;
import com.alfa.consulting.persistencia.entidades.Usuario;

import service.ClienteService;
import vo.ClienteCollection;
import vo.UsuarioCollection;

@ContextConfiguration(locations={"classpath:/appContext.xml"})
public class ClienteServiceImpl implements ClienteService {
	@Context
	UriInfo uriInfo;
	@Context
	Request request;
	
	@PersistenceContext
	protected
	EntityManager entityManager;

    public ClienteServiceImpl() {}

    @Override
    public UsuarioCollection getClientes() {
    	List<Object[]> listCli = null;
		try {
			listCli = obtenerClientes();
		} catch (Exception e) {
			e.printStackTrace();
		}
    	List<model.Usuario> list = new ArrayList<model.Usuario>();
    	
    	if(listCli != null){
    		for(Object[] obj : listCli){
    			Usuario micliente = (Usuario)obj[0];
    			model.Usuario cli = new model.Usuario(micliente.getCodigoUsuario(),
    								micliente.getPrimerNombre(),
    								micliente.getSegundoNombre(),
    								micliente.getApellidoPaterno(),
    								micliente.getApellidoMaterno(),
    								micliente.getTipoDocumento(),
    								micliente.getNroDocumento(),
    								micliente.getFechaNacimiento(),
    								micliente.getSexo(),
    								micliente.getTelefono(),
    								micliente.getMovil(),
    								micliente.getDireccion(),
    								micliente.getTipoUsuario(),
    								micliente.getEstado(),
    								micliente.getUsuarioCreacion(),
    								micliente.getFechaCreacion(),
    								micliente.getTerminalCreacion(),
    								micliente.getUsuarioModificacion(),
    								micliente.getFechaModificacion(),
    								micliente.getTerminalModificacion(),
    								micliente.getNombreUsuario(),
    								micliente.getIdEmpleado(),
    								micliente.getHabilitarSesion(),
    								micliente.getSolicitudServicio(),
    								micliente.getOrdenCompra(),
    								micliente.getNombreCargo(),
    								micliente.getEmail(),
    								micliente.getImagen());
    			list.add(cli);
    		}
    	}
    	
        return new UsuarioCollection(list);
    }
    
    public List<Object[]> obtenerClientes() throws Exception {

		StringBuffer consulta = new StringBuffer();
		consulta.append("Select usu.codigoUsuario, usu.primerNombre, usu.segundoNombre, ");
		consulta.append("usu.apellidoPaterno, usu.apellidoMaterno, usu.tipoDocumento, ");
		consulta.append("usu.nroDocumento, usu.fechaNacimiento, usu.sexo, ");
		consulta.append("usu.telefono, usu.movil, usu.direccion, usu.tipoUsuario, ");
		consulta.append("usu.estado, usu.usuarioCreacion, usu.fechaCreacion, usu.terminalCreacion, ");
		consulta.append("usu.usuarioModificacion, usu.fechaModificacion, usu.terminalModificacion, usu.nombreUsuario, ");
		consulta.append("usu.idEmpleado, usu.habilitarSesion, usu.solicitudServicio, ");
		consulta.append("usu.ordenCompra, usu.nombreCargo, usu.email, ");
		consulta.append("usu.imagen ");
		consulta.append("from Usuario as usu");
		Query query = entityManager.createQuery(consulta.toString());
		
		List<Object[]> list = (List<Object[]>) query.getResultList();		

		if (list != null)
			return list;
		else
			return null;

	}

}
