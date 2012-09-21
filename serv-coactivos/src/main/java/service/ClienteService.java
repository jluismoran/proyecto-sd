package service;

import javax.ws.rs.GET;
import javax.ws.rs.Path;
import javax.ws.rs.Produces;

import vo.ClienteCollection;
import vo.UsuarioCollection;

@Path("/cliente-service/")
@Produces("application/xml")
public interface ClienteService {
	
	    @GET
	    @Path("/clientes")
	    @Produces({"application/xml", "application/json"})
	    public ClienteCollection getClientes();
	    

	}