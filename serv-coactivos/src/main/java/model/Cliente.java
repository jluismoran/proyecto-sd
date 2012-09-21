package model;

import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement(name = "cliente")
public class Cliente {

	private Integer id;
	private String idExterno;
	private String  descripcion1;
	private String  descripcion2;
	private String  nroIdentificacion;
	private Integer idDistrito;
	private String  direccion;
	private Integer idEstadoDeuda;
	private String  complemento;
	private Integer saldo;
	private Integer complementoIdMoneda;
	private String  fechaSaldo;
    
    
    public Cliente() {}
    

    public Cliente(Integer id,
					String idExterno,
					String descripcion1,
					String descripcion2,
					String nroIdentificacion,
					Integer idDistrito,
					String direccion,
					Integer idEstadoDeuda,
					String complemento,
					Integer saldo,
					Integer complementoIdMoneda,
					String fechaSaldo) {
    	super();
		this.id = id;
		this.idExterno = idExterno;
		this.descripcion1 = descripcion1;
		this.descripcion2 = descripcion2;
		this.nroIdentificacion = nroIdentificacion;
		this.idDistrito = idDistrito;
		this.direccion = direccion;
		this.idEstadoDeuda = idEstadoDeuda;
		this.complemento = complemento;
		this.saldo = saldo;
		this.complementoIdMoneda = complementoIdMoneda;
		this.fechaSaldo = fechaSaldo;
	}
    
	public Integer getId() {
		return id;
	}


	public void setId(Integer id) {
		this.id = id;
	}


	public String getIdExterno() {
		return idExterno;
	}


	public void setIdExterno(String idExterno) {
		this.idExterno = idExterno;
	}


	public String getDescripcion1() {
		return descripcion1;
	}


	public void setDescripcion1(String descripcion1) {
		this.descripcion1 = descripcion1;
	}


	public String getDescripcion2() {
		return descripcion2;
	}


	public void setDescripcion2(String descripcion2) {
		this.descripcion2 = descripcion2;
	}


	public String getNroIdentificacion() {
		return nroIdentificacion;
	}


	public void setNroIdentificacion(String nroIdentificacion) {
		this.nroIdentificacion = nroIdentificacion;
	}


	public Integer getIdDistrito() {
		return idDistrito;
	}


	public void setIdDistrito(Integer idDistrito) {
		this.idDistrito = idDistrito;
	}


	public String getDireccion() {
		return direccion;
	}


	public void setDireccion(String direccion) {
		this.direccion = direccion;
	}


	public Integer getIdEstadoDeuda() {
		return idEstadoDeuda;
	}


	public void setIdEstadoDeuda(Integer idEstadoDeuda) {
		this.idEstadoDeuda = idEstadoDeuda;
	}


	public String getComplemento() {
		return complemento;
	}


	public void setComplemento(String complemento) {
		this.complemento = complemento;
	}


	public Integer getSaldo() {
		return saldo;
	}


	public void setSaldo(Integer saldo) {
		this.saldo = saldo;
	}


	public Integer getComplementoIdMoneda() {
		return complementoIdMoneda;
	}


	public void setComplementoIdMoneda(Integer complementoIdMoneda) {
		this.complementoIdMoneda = complementoIdMoneda;
	}


	public String getFechaSaldo() {
		return fechaSaldo;
	}


	public void setFechaSaldo(String fechaSaldo) {
		this.fechaSaldo = fechaSaldo;
	}


	@Override
    public String toString() {
        return String.format(descripcion1);
    }

}
