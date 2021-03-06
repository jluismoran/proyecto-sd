package com.alfa.consulting.persistencia.entidades;

// Generated 07/05/2012 01:03:00 AM by Hibernate Tools 3.4.0.CR1

import javax.persistence.Column;
import javax.persistence.Embeddable;

/**
 * TecnicoSitioId generated by hbm2java
 */
@Embeddable
public class TecnicoSitioId implements java.io.Serializable {

	private int codigoSitio;
	private int codigoUsuario;

	public TecnicoSitioId() {
	}

	public TecnicoSitioId(int codigoSitio, int codigoUsuario) {
		this.codigoSitio = codigoSitio;
		this.codigoUsuario = codigoUsuario;
	}

	@Column(name = "codigoSitio", nullable = false)
	public int getCodigoSitio() {
		return this.codigoSitio;
	}

	public void setCodigoSitio(int codigoSitio) {
		this.codigoSitio = codigoSitio;
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
		if (!(other instanceof TecnicoSitioId))
			return false;
		TecnicoSitioId castOther = (TecnicoSitioId) other;

		return (this.getCodigoSitio() == castOther.getCodigoSitio())
				&& (this.getCodigoUsuario() == castOther.getCodigoUsuario());
	}

	public int hashCode() {
		int result = 17;

		result = 37 * result + this.getCodigoSitio();
		result = 37 * result + this.getCodigoUsuario();
		return result;
	}

}
