package model;

import java.util.Date;

import javax.xml.bind.annotation.XmlRootElement;

import com.alfa.consulting.persistencia.entidades.Organizacion;

@XmlRootElement(name = "usuario")
public class Usuario {

	private int codigoUsuario;
	private String primerNombre;
	private String segundoNombre;
	private String apellidoPaterno;
	private String apellidoMaterno;
	private Integer tipoDocumento;
	private String nroDocumento;
	private Date fechaNacimiento;
	private Integer sexo;
	private String telefono;
	private String movil;
	private String direccion;
	private Integer tipoUsuario;
	private Integer estado;
	private String usuarioCreacion;
	private Date fechaCreacion;
	private String terminalCreacion;
	private String usuarioModificacion;
	private Date fechaModificacion;
	private String terminalModificacion;
	private String nombreUsuario;
	private String idEmpleado;
	private Boolean habilitarSesion;
	private Boolean solicitudServicio;
	private Boolean ordenCompra;
	private String nombreCargo;
	private String email;
	private String imagen;
    
    
    public Usuario() {}
    

    public Usuario( int codigoUsuario,
					 String primerNombre,
					 String segundoNombre,
					 String apellidoPaterno,
					 String apellidoMaterno,
					 Integer tipoDocumento,
					 String nroDocumento,
					 Date fechaNacimiento,
					 Integer sexo,
					 String telefono,
					 String movil,
					 String direccion,
					 Integer tipoUsuario,
					 Integer estado,
					 String usuarioCreacion,
					 Date fechaCreacion,
					 String terminalCreacion,
					 String usuarioModificacion,
					 Date fechaModificacion,
					 String terminalModificacion,
					 String nombreUsuario,
					 String idEmpleado,
					 Boolean habilitarSesion,
					 Boolean solicitudServicio,
					 Boolean ordenCompra,
					 String nombreCargo,
					 String email,
					 String imagen) {
		super();
		this.codigoUsuario = codigoUsuario;
		this.primerNombre = primerNombre;
		this.segundoNombre = segundoNombre;
		this.apellidoPaterno = apellidoPaterno;
		this.apellidoMaterno = apellidoMaterno;
		this.tipoDocumento = tipoDocumento;
		this.nroDocumento = nroDocumento;
		this.fechaNacimiento = fechaNacimiento;
		this.sexo = sexo;
		this.telefono = telefono;
		this.movil = movil;
		this.direccion = direccion;
		this.tipoUsuario = tipoUsuario;
		this.estado = estado;
		this.usuarioCreacion = usuarioCreacion;
		this.fechaCreacion = fechaCreacion;
		this.terminalCreacion = terminalCreacion;
		this.usuarioModificacion = usuarioModificacion;
		this.fechaModificacion = fechaModificacion;
		this.terminalModificacion = terminalModificacion;
		this.nombreUsuario = nombreUsuario;
		this.idEmpleado = idEmpleado;
		this.habilitarSesion = habilitarSesion;
		this.solicitudServicio = solicitudServicio;
		this.ordenCompra = ordenCompra;
		this.nombreCargo = nombreCargo;
		this.email = email;
		this.imagen = imagen;
	}

	@Override
    public String toString() {
        return String.format(primerNombre + " " + segundoNombre + " " +
        		apellidoPaterno + " " + apellidoMaterno) ;
    }


	public int getCodigoUsuario() {
		return codigoUsuario;
	}


	public void setCodigoUsuario(int codigoUsuario) {
		this.codigoUsuario = codigoUsuario;
	}


	public String getPrimerNombre() {
		return primerNombre;
	}


	public void setPrimerNombre(String primerNombre) {
		this.primerNombre = primerNombre;
	}


	public String getSegundoNombre() {
		return segundoNombre;
	}


	public void setSegundoNombre(String segundoNombre) {
		this.segundoNombre = segundoNombre;
	}


	public String getApellidoPaterno() {
		return apellidoPaterno;
	}


	public void setApellidoPaterno(String apellidoPaterno) {
		this.apellidoPaterno = apellidoPaterno;
	}


	public String getApellidoMaterno() {
		return apellidoMaterno;
	}


	public void setApellidoMaterno(String apellidoMaterno) {
		this.apellidoMaterno = apellidoMaterno;
	}


	public Integer getTipoDocumento() {
		return tipoDocumento;
	}


	public void setTipoDocumento(Integer tipoDocumento) {
		this.tipoDocumento = tipoDocumento;
	}


	public String getNroDocumento() {
		return nroDocumento;
	}


	public void setNroDocumento(String nroDocumento) {
		this.nroDocumento = nroDocumento;
	}


	public Date getFechaNacimiento() {
		return fechaNacimiento;
	}


	public void setFechaNacimiento(Date fechaNacimiento) {
		this.fechaNacimiento = fechaNacimiento;
	}


	public Integer getSexo() {
		return sexo;
	}


	public void setSexo(Integer sexo) {
		this.sexo = sexo;
	}


	public String getTelefono() {
		return telefono;
	}


	public void setTelefono(String telefono) {
		this.telefono = telefono;
	}


	public String getMovil() {
		return movil;
	}


	public void setMovil(String movil) {
		this.movil = movil;
	}


	public String getDireccion() {
		return direccion;
	}


	public void setDireccion(String direccion) {
		this.direccion = direccion;
	}


	public Integer getTipoUsuario() {
		return tipoUsuario;
	}


	public void setTipoUsuario(Integer tipoUsuario) {
		this.tipoUsuario = tipoUsuario;
	}


	public Integer getEstado() {
		return estado;
	}


	public void setEstado(Integer estado) {
		this.estado = estado;
	}


	public String getUsuarioCreacion() {
		return usuarioCreacion;
	}
	public void setUsuarioCreacion(String usuarioCreacion) {
		this.usuarioCreacion = usuarioCreacion;
	}
	public Date getFechaCreacion() {
		return fechaCreacion;
	}
	public void setFechaCreacion(Date fechaCreacion) {
		this.fechaCreacion = fechaCreacion;
	}
	public String getTerminalCreacion() {
		return terminalCreacion;
	}
	public void setTerminalCreacion(String terminalCreacion) {
		this.terminalCreacion = terminalCreacion;
	}
	public String getUsuarioModificacion() {
		return usuarioModificacion;
	}
	public void setUsuarioModificacion(String usuarioModificacion) {
		this.usuarioModificacion = usuarioModificacion;
	}
	public Date getFechaModificacion() {
		return fechaModificacion;
	}
	public void setFechaModificacion(Date fechaModificacion) {
		this.fechaModificacion = fechaModificacion;
	}
	public String getTerminalModificacion() {
		return terminalModificacion;
	}
	public void setTerminalModificacion(String terminalModificacion) {
		this.terminalModificacion = terminalModificacion;
	}
	public String getNombreUsuario() {
		return nombreUsuario;
	}
	public void setNombreUsuario(String nombreUsuario) {
		this.nombreUsuario = nombreUsuario;
	}
	public String getIdEmpleado() {
		return idEmpleado;
	}
	public void setIdEmpleado(String idEmpleado) {
		this.idEmpleado = idEmpleado;
	}
	public Boolean getHabilitarSesion() {
		return habilitarSesion;
	}
	public void setHabilitarSesion(Boolean habilitarSesion) {
		this.habilitarSesion = habilitarSesion;
	}
	public Boolean getSolicitudServicio() {
		return solicitudServicio;
	}
	public void setSolicitudServicio(Boolean solicitudServicio) {
		this.solicitudServicio = solicitudServicio;
	}
	public Boolean getOrdenCompra() {
		return ordenCompra;
	}
	public void setOrdenCompra(Boolean ordenCompra) {
		this.ordenCompra = ordenCompra;
	}
	public String getNombreCargo() {
		return nombreCargo;
	}
	public void setNombreCargo(String nombreCargo) {
		this.nombreCargo = nombreCargo;
	}
	public String getEmail() {
		return email;
	}
	public void setEmail(String email) {
		this.email = email;
	}
	public String getImagen() {
		return imagen;
	}
	public void setImagen(String imagen) {
		this.imagen = imagen;
	}

}
