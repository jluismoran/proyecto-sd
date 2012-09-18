package com.alfa.consulting.persistencia.entidades;

// Generated 07/05/2012 01:03:00 AM by Hibernate Tools 3.4.0.CR1

import javax.persistence.Column;
import javax.persistence.Embeddable;

/**
 * CambioServicioId generated by hbm2java
 */
@Embeddable
public class CambioServicioId implements java.io.Serializable {

	private int codigoCategoriaServicio;
	private int codigoCambio;

	public CambioServicioId() {
	}

	public CambioServicioId(int codigoCategoriaServicio, int codigoCambio) {
		this.codigoCategoriaServicio = codigoCategoriaServicio;
		this.codigoCambio = codigoCambio;
	}

	@Column(name = "codigoCategoriaServicio", nullable = false)
	public int getCodigoCategoriaServicio() {
		return this.codigoCategoriaServicio;
	}

	public void setCodigoCategoriaServicio(int codigoCategoriaServicio) {
		this.codigoCategoriaServicio = codigoCategoriaServicio;
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
		if (!(other instanceof CambioServicioId))
			return false;
		CambioServicioId castOther = (CambioServicioId) other;

		return (this.getCodigoCategoriaServicio() == castOther
				.getCodigoCategoriaServicio())
				&& (this.getCodigoCambio() == castOther.getCodigoCambio());
	}

	public int hashCode() {
		int result = 17;

		result = 37 * result + this.getCodigoCategoriaServicio();
		result = 37 * result + this.getCodigoCambio();
		return result;
	}

}