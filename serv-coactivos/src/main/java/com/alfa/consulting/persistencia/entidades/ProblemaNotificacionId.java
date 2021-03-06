package com.alfa.consulting.persistencia.entidades;

// Generated 07/05/2012 01:03:00 AM by Hibernate Tools 3.4.0.CR1

import javax.persistence.Column;
import javax.persistence.Embeddable;

/**
 * ProblemaNotificacionId generated by hbm2java
 */
@Embeddable
public class ProblemaNotificacionId implements java.io.Serializable {

	private int codigoNotificacion;
	private int codigoProblema;

	public ProblemaNotificacionId() {
	}

	public ProblemaNotificacionId(int codigoNotificacion, int codigoProblema) {
		this.codigoNotificacion = codigoNotificacion;
		this.codigoProblema = codigoProblema;
	}

	@Column(name = "codigoNotificacion", nullable = false)
	public int getCodigoNotificacion() {
		return this.codigoNotificacion;
	}

	public void setCodigoNotificacion(int codigoNotificacion) {
		this.codigoNotificacion = codigoNotificacion;
	}

	@Column(name = "codigoProblema", nullable = false)
	public int getCodigoProblema() {
		return this.codigoProblema;
	}

	public void setCodigoProblema(int codigoProblema) {
		this.codigoProblema = codigoProblema;
	}

	public boolean equals(Object other) {
		if ((this == other))
			return true;
		if ((other == null))
			return false;
		if (!(other instanceof ProblemaNotificacionId))
			return false;
		ProblemaNotificacionId castOther = (ProblemaNotificacionId) other;

		return (this.getCodigoNotificacion() == castOther
				.getCodigoNotificacion())
				&& (this.getCodigoProblema() == castOther.getCodigoProblema());
	}

	public int hashCode() {
		int result = 17;

		result = 37 * result + this.getCodigoNotificacion();
		result = 37 * result + this.getCodigoProblema();
		return result;
	}

}
