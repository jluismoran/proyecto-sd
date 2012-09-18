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
 * Funcion generated by hbm2java
 */
@Entity
@Table(name = "FUNCION", schema = "dbo", catalog = "SISMAV2")
public class Funcion implements java.io.Serializable {

	private int codigoFuncion;
	private String nombreFuncion;
	private String descripcion;
	private Integer permisoVisualizacion;
	private Integer tecnicoHabilitado;
	private Integer estado;
	private String usuarioCreacion;
	private Date fechaCreacion;
	private String terminalCreacion;
	private String usuarioModificacion;
	private Date fechaModificacion;
	private String terminalModificacion;
	private Integer editable;
	private Integer eliminable;
	private Set<FuncionDetalle> funcionDetalles = new HashSet<FuncionDetalle>(0);
	private Set<UsuarioFuncion> usuarioFuncions = new HashSet<UsuarioFuncion>(0);

	public Funcion() {
	}

	public Funcion(int codigoFuncion) {
		this.codigoFuncion = codigoFuncion;
	}

	public Funcion(int codigoFuncion, String nombreFuncion, String descripcion,
			Integer permisoVisualizacion, Integer tecnicoHabilitado,
			Integer estado, String usuarioCreacion, Date fechaCreacion,
			String terminalCreacion, String usuarioModificacion,
			Date fechaModificacion, String terminalModificacion,
			Integer editable, Integer eliminable,
			Set<FuncionDetalle> funcionDetalles,
			Set<UsuarioFuncion> usuarioFuncions) {
		this.codigoFuncion = codigoFuncion;
		this.nombreFuncion = nombreFuncion;
		this.descripcion = descripcion;
		this.permisoVisualizacion = permisoVisualizacion;
		this.tecnicoHabilitado = tecnicoHabilitado;
		this.estado = estado;
		this.usuarioCreacion = usuarioCreacion;
		this.fechaCreacion = fechaCreacion;
		this.terminalCreacion = terminalCreacion;
		this.usuarioModificacion = usuarioModificacion;
		this.fechaModificacion = fechaModificacion;
		this.terminalModificacion = terminalModificacion;
		this.editable = editable;
		this.eliminable = eliminable;
		this.funcionDetalles = funcionDetalles;
		this.usuarioFuncions = usuarioFuncions;
	}

	@Id
	@Column(name = "codigoFuncion", unique = true, nullable = false)
	public int getCodigoFuncion() {
		return this.codigoFuncion;
	}

	public void setCodigoFuncion(int codigoFuncion) {
		this.codigoFuncion = codigoFuncion;
	}

	@Column(name = "nombreFuncion", length = 100)
	public String getNombreFuncion() {
		return this.nombreFuncion;
	}

	public void setNombreFuncion(String nombreFuncion) {
		this.nombreFuncion = nombreFuncion;
	}

	@Column(name = "descripcion")
	public String getDescripcion() {
		return this.descripcion;
	}

	public void setDescripcion(String descripcion) {
		this.descripcion = descripcion;
	}

	@Column(name = "permisoVisualizacion")
	public Integer getPermisoVisualizacion() {
		return this.permisoVisualizacion;
	}

	public void setPermisoVisualizacion(Integer permisoVisualizacion) {
		this.permisoVisualizacion = permisoVisualizacion;
	}

	@Column(name = "tecnicoHabilitado")
	public Integer getTecnicoHabilitado() {
		return this.tecnicoHabilitado;
	}

	public void setTecnicoHabilitado(Integer tecnicoHabilitado) {
		this.tecnicoHabilitado = tecnicoHabilitado;
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

	@Column(name = "editable")
	public Integer getEditable() {
		return this.editable;
	}

	public void setEditable(Integer editable) {
		this.editable = editable;
	}

	@Column(name = "eliminable")
	public Integer getEliminable() {
		return this.eliminable;
	}

	public void setEliminable(Integer eliminable) {
		this.eliminable = eliminable;
	}

	@OneToMany(fetch = FetchType.LAZY, mappedBy = "funcion")
	public Set<FuncionDetalle> getFuncionDetalles() {
		return this.funcionDetalles;
	}

	public void setFuncionDetalles(Set<FuncionDetalle> funcionDetalles) {
		this.funcionDetalles = funcionDetalles;
	}

	@OneToMany(fetch = FetchType.LAZY, mappedBy = "funcion")
	public Set<UsuarioFuncion> getUsuarioFuncions() {
		return this.usuarioFuncions;
	}

	public void setUsuarioFuncions(Set<UsuarioFuncion> usuarioFuncions) {
		this.usuarioFuncions = usuarioFuncions;
	}

}
