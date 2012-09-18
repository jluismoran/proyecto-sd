package com.alfa.consulting.persistencia.entidades;

// Generated 07/05/2012 01:03:00 AM by Hibernate Tools 3.4.0.CR1

import java.util.Date;
import java.util.HashSet;
import java.util.Set;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.Id;
import javax.persistence.OneToMany;
import javax.persistence.Table;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;

/**
 * Nivel generated by hbm2java
 */
@Entity
@Table(name = "NIVEL", schema = "dbo", catalog = "SISMAV2")
public class Nivel implements java.io.Serializable {

	private int codigoNivel;
	private String nombreNivel;
	private Integer estado;
	private String usuarioCreacion;
	private Date fechaCreacion;
	private String terminalCreacion;
	private String usuarioModificacion;
	private Date fechaModificacion;
	private String terminalModificacion;
	private Set<Solicitud> solicituds = new HashSet<Solicitud>(0);

	public Nivel() {
	}

	public Nivel(int codigoNivel) {
		this.codigoNivel = codigoNivel;
	}

	public Nivel(int codigoNivel, String nombreNivel, Integer estado,
			String usuarioCreacion, Date fechaCreacion,
			String terminalCreacion, String usuarioModificacion,
			Date fechaModificacion, String terminalModificacion,
			Set<Solicitud> solicituds) {
		this.codigoNivel = codigoNivel;
		this.nombreNivel = nombreNivel;
		this.estado = estado;
		this.usuarioCreacion = usuarioCreacion;
		this.fechaCreacion = fechaCreacion;
		this.terminalCreacion = terminalCreacion;
		this.usuarioModificacion = usuarioModificacion;
		this.fechaModificacion = fechaModificacion;
		this.terminalModificacion = terminalModificacion;
		this.solicituds = solicituds;
	}

	@Id
	@Column(name = "codigoNivel", unique = true, nullable = false)
	public int getCodigoNivel() {
		return this.codigoNivel;
	}

	public void setCodigoNivel(int codigoNivel) {
		this.codigoNivel = codigoNivel;
	}

	@Column(name = "nombreNivel", length = 50)
	public String getNombreNivel() {
		return this.nombreNivel;
	}

	public void setNombreNivel(String nombreNivel) {
		this.nombreNivel = nombreNivel;
	}

	@Column(name = "estado")
	public Integer getEstado() {
		return this.estado;
	}

	public void setEstado(Integer estado) {
		this.estado = estado;
	}

	@Column(name = "usuarioCreacion", length = 50)
	public String getUsuarioCreacion() {
		return this.usuarioCreacion;
	}

	public void setUsuarioCreacion(String usuarioCreacion) {
		this.usuarioCreacion = usuarioCreacion;
	}

	@Temporal(TemporalType.TIMESTAMP)
	@Column(name = "fechaCreacion", length = 23)
	public Date getFechaCreacion() {
		return this.fechaCreacion;
	}

	public void setFechaCreacion(Date fechaCreacion) {
		this.fechaCreacion = fechaCreacion;
	}

	@Column(name = "terminalCreacion", length = 50)
	public String getTerminalCreacion() {
		return this.terminalCreacion;
	}

	public void setTerminalCreacion(String terminalCreacion) {
		this.terminalCreacion = terminalCreacion;
	}

	@Column(name = "usuarioModificacion", length = 50)
	public String getUsuarioModificacion() {
		return this.usuarioModificacion;
	}

	public void setUsuarioModificacion(String usuarioModificacion) {
		this.usuarioModificacion = usuarioModificacion;
	}

	@Temporal(TemporalType.TIMESTAMP)
	@Column(name = "fechaModificacion", length = 23)
	public Date getFechaModificacion() {
		return this.fechaModificacion;
	}

	public void setFechaModificacion(Date fechaModificacion) {
		this.fechaModificacion = fechaModificacion;
	}

	@Column(name = "terminalModificacion", length = 50)
	public String getTerminalModificacion() {
		return this.terminalModificacion;
	}

	public void setTerminalModificacion(String terminalModificacion) {
		this.terminalModificacion = terminalModificacion;
	}

	@OneToMany(fetch = FetchType.LAZY, mappedBy = "nivel")
	public Set<Solicitud> getSolicituds() {
		return this.solicituds;
	}

	public void setSolicituds(Set<Solicitud> solicituds) {
		this.solicituds = solicituds;
	}

}