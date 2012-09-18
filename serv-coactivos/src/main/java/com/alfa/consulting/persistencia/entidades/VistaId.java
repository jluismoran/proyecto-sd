package com.alfa.consulting.persistencia.entidades;

// Generated 07/05/2012 01:03:00 AM by Hibernate Tools 3.4.0.CR1

import javax.persistence.Column;
import javax.persistence.Embeddable;

/**
 * VistaId generated by hbm2java
 */
@Embeddable
public class VistaId implements java.io.Serializable {

	private int codigoVista;
	private int codigoUsuario;

	public VistaId() {
	}

	public VistaId(int codigoVista, int codigoUsuario) {
		this.codigoVista = codigoVista;
		this.codigoUsuario = codigoUsuario;
	}

	@Column(name = "codigoVista", nullable = false)
	public int getCodigoVista() {
		return this.codigoVista;
	}

	public void setCodigoVista(int codigoVista) {
		this.codigoVista = codigoVista;
	}

	@Column(name = "codigoUsuario", nullable = false)
	public int getCodigoUsuario() {
		return this.codigoUsuario;
	}

	public void setCodigoUsuario(int codigoUsuario) {
		this.codigoUsuario = codigoUsuario;
	}

	public boolean equals(Object other) {
		if ((this == other))
			return true;
		if ((other == null))
			return false;
		if (!(other instanceof VistaId))
			return false;
		VistaId castOther = (VistaId) other;

		return (this.getCodigoVista() == castOther.getCodigoVista())
				&& (this.getCodigoUsuario() == castOther.getCodigoUsuario());
	}

	public int hashCode() {
		int result = 17;

		result = 37 * result + this.getCodigoVista();
		result = 37 * result + this.getCodigoUsuario();
		return result;
	}

}