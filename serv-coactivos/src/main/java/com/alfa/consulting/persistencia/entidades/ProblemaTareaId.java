package com.alfa.consulting.persistencia.entidades;

// Generated 07/05/2012 01:03:00 AM by Hibernate Tools 3.4.0.CR1

import javax.persistence.Column;
import javax.persistence.Embeddable;

/**
 * ProblemaTareaId generated by hbm2java
 */
@Embeddable
public class ProblemaTareaId implements java.io.Serializable {

	private int codigoTarea;
	private int codigoProblema;

	public ProblemaTareaId() {
	}

	public ProblemaTareaId(int codigoTarea, int codigoProblema) {
		this.codigoTarea = codigoTarea;
		this.codigoProblema = codigoProblema;
	}

	@Column(name = "codigoTarea", nullable = false)
	public int getCodigoTarea() {
		return this.codigoTarea;
	}

	public void setCodigoTarea(int codigoTarea) {
		this.codigoTarea = codigoTarea;
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
		if (!(other instanceof ProblemaTareaId))
			return false;
		ProblemaTareaId castOther = (ProblemaTareaId) other;

		return (this.getCodigoTarea() == castOther.getCodigoTarea())
				&& (this.getCodigoProblema() == castOther.getCodigoProblema());
	}

	public int hashCode() {
		int result = 17;

		result = 37 * result + this.getCodigoTarea();
		result = 37 * result + this.getCodigoProblema();
		return result;
	}

}
