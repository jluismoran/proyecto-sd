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
    public ClienteCollection getClientes() {
    	List<Cliente> listCli = null;
		try {
			listCli = obtenerClientes();
		} catch (Exception e) {
			e.printStackTrace();
		}
    	List<model.Cliente> list = new ArrayList<model.Cliente>();
    	
    	if(listCli != null){
    		for(Cliente obj : listCli){
    			Cliente micliente = (Cliente)obj;
    			model.Cliente cli = new model.Cliente(micliente.getId(),
    												micliente.getIdExterno(),
							    					micliente.getDescripcion1(),
							    					micliente.getDescripcion2(),
							    					micliente.getNroIdentificacion(),
							    					micliente.getIdDistrito(),
							    					micliente.getDireccion(),
							    					micliente.getIdEstadoDeuda(),
							    					micliente.getComplemento(),
							    					micliente.getSaldo(),
							    					micliente.getComplementoIdMoneda(),
							    					micliente.getFechaSaldo());
    			list.add(cli);
    		}
    	}
    	
        return new ClienteCollection(list);
    }
    
    public List<Cliente> obtenerClientes() throws Exception {

		StringBuffer consulta = new StringBuffer();
		consulta.append("Select cli from Cliente as cli");
		Query query = entityManager.createQuery(consulta.toString());
		
		List<Cliente> list = (List<Cliente>) query.getResultList();		

		if (list != null)
			return list;
		else
			return null;

	}

}
