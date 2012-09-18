package model;

import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement(name = "cliente")
public class Cliente {

	private String cliente_id;
    private String cliente_idExterno;
    private String descripcion1;
    private String descripcion2;
    private String nro_identificacion;
    private String dst_id;
    private String direccion;
    private String estado_idDeuda;
    private String saldo;
    private String complemento_idMoneda;
    private String fecha_saldo;
    
    
    public Cliente() {}
    

    public Cliente(String cliente_id,
					String cliente_idExterno,
					String descripcion1,
					String descripcion2,
					String nro_identificacion,
					String dst_id,
					String direccion,
					String estado_idDeuda,
					String saldo,
					String complemento_idMoneda,
					String fecha_saldo) {
    	super();
		this.cliente_id = cliente_id;
		this.cliente_idExterno = cliente_idExterno;
		this.descripcion1 = descripcion1;
		this.descripcion2 = descripcion2;
		this.nro_identificacion = nro_identificacion;
		this.dst_id = dst_id;
		this.direccion = direccion;
		this.estado_idDeuda = estado_idDeuda;
		this.saldo = saldo;
		this.complemento_idMoneda = complemento_idMoneda;
		this.fecha_saldo = fecha_saldo;
	}

	public String getCliente_id() {
		return cliente_id;
	}

	public void setCliente_id(String cliente_id) {
		this.cliente_id = cliente_id;
	}

	public String getCliente_idExterno() {
		return cliente_idExterno;
	}

	public void setCliente_idExterno(String cliente_idExterno) {
		this.cliente_idExterno = cliente_idExterno;
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

	public String getNro_identificacion() {
		return nro_identificacion;
	}

	public void setNro_identificacion(String nro_identificacion) {
		this.nro_identificacion = nro_identificacion;
	}

	public String getDst_id() {
		return dst_id;
	}

	public void setDst_id(String dst_id) {
		this.dst_id = dst_id;
	}

	public String getDireccion() {
		return direccion;
	}

	public void setDireccion(String direccion) {
		this.direccion = direccion;
	}

	public String getEstado_idDeuda() {
		return estado_idDeuda;
	}

	public void setEstado_idDeuda(String estado_idDeuda) {
		this.estado_idDeuda = estado_idDeuda;
	}

	public String getSaldo() {
		return saldo;
	}

	public void setSaldo(String saldo) {
		this.saldo = saldo;
	}

	public String getComplemento_idMoneda() {
		return complemento_idMoneda;
	}

	public void setComplemento_idMoneda(String complemento_idMoneda) {
		this.complemento_idMoneda = complemento_idMoneda;
	}

	public String getFecha_saldo() {
		return fecha_saldo;
	}

	public void setFecha_saldo(String fecha_saldo) {
		this.fecha_saldo = fecha_saldo;
	}

	@Override
    public String toString() {
        return String.format(descripcion1);
    }

}
