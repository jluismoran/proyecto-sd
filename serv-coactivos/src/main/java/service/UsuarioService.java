package service;

import javax.ws.rs.GET;
import javax.ws.rs.Path;
import javax.ws.rs.Produces;

import vo.UsuarioCollection;

@Path("/usuario-service/")
@Produces("application/xml")
public interface UsuarioService {
	
	    @GET
	    @Path("/usuarios")
	    @Produces({"application/xml", "application/json"})
	    public UsuarioCollection getUsuarios();
	    

	}