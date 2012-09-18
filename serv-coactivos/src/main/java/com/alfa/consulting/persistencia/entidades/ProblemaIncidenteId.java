package com.alfa.consulting.persistencia.entidades;

// Generated 07/05/2012 01:03:00 AM by Hibernate Tools 3.4.0.CR1

import javax.persistence.Column;
import javax.persistence.Embeddable;

/**
 * ProblemaIncidenteId generated by hbm2java
 */
@Embeddable
public class ProblemaIncidenteId implements java.io.Serializable {

	private int codigoProblema;
	private int codigoSolicitud;
	private int codigoUsuario;

	public ProblemaIncidenteId() {
	}

	public ProblemaIncidenteId(int codigoProblema, int codigoSolicitud,
			int codigoUsuario) {
		this.codigoProblema = codigoProblema;
		this.codigoSolicitud = codigoSolicitud;
		this.codigoUsuario = codigoUsuario;
	}

	@Column(name = "codigoProblema", nullable = false)
	public int getCodigoProblema() {
		return this.codigoProblema;
	}

	public void setCodigoProblema(int codigoProblema) {
		this.codigoProblema = codigoProblema;
	}

	@Column(name = "codigoSolicitud", nullable = false)
	public int getCodigoSolicitud() {
		return this.codigoSolicitud;
	}

	public void setCodigoSolicitud(int codigoSolicitud) {
		this.codigoSolicitud = codigoSolicitud;
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
		if (!(other instanceof ProblemaIncidenteId))
			return false;
		ProblemaIncidenteId castOther = (ProblemaIncidenteId) other;

		return (this.getCodigoProblema() == castOther.getCodigoProblema())
				&& (this.getCodigoSolicitud() == castOther.getCodigoSolicitud())
				&& (this.getCodigoUsuario() == castOther.getCodigoUsuario());
	}

	public int hashCode() {
		int result = 17;

		result = 37 * result + this.getCodigoProblema();
		result = 37 * result + this.getCodigoSolicitud();
		result = 37 * result + this.getCodigoUsuario();
		return result;
	}

}
