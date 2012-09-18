package com.alfa.consulting.persistencia.entidades;

// Generated 07/05/2012 01:03:00 AM by Hibernate Tools 3.4.0.CR1

import javax.persistence.Column;
import javax.persistence.Embeddable;

/**
 * CambioEntradaTiempoId generated by hbm2java
 */
@Embeddable
public class CambioEntradaTiempoId implements java.io.Serializable {

	private int codigoEntradaTiempo;
	private int codigoCambio;

	public CambioEntradaTiempoId() {
	}

	public CambioEntradaTiempoId(int codigoEntradaTiempo, int codigoCambio) {
		this.codigoEntradaTiempo = codigoEntradaTiempo;
		this.codigoCambio = codigoCambio;
	}

	@Column(name = "codigoEntradaTiempo", nullable = false)
	public int getCodigoEntradaTiempo() {
		return this.codigoEntradaTiempo;
	}

	public void setCodigoEntradaTiempo(int codigoEntradaTiempo) {
		this.codigoEntradaTiempo = codigoEntradaTiempo;
	}

	@Column(name = "codigoCambio", nullable = false)
	public int getCodigoCambio() {
		return this.codigoCambio;
	}

	public void setCodigoCambio(int codigoCambio) {
		this.codigoCambio = codigoCambio;
	}

	public boolean equals(Object other) {
		if ((this == other))
			return true;
		if ((other == null))
			return false;
		if (!(other instanceof CambioEntradaTiempoId))
			return false;
		CambioEntradaTiempoId castOther = (CambioEntradaTiempoId) other;

		return (this.getCodigoEntradaTiempo() == castOther
				.getCodigoEntradaTiempo())
				&& (this.getCodigoCambio() == castOther.getCodigoCambio());
	}

	public int hashCode() {
		int result = 17;

		result = 37 * result + this.getCodigoEntradaTiempo();
		result = 37 * result + this.getCodigoCambio();
		return result;
	}

}
