package com.alfa.consulting.persistencia.entidades;

// Generated 07/05/2012 01:03:00 AM by Hibernate Tools 3.4.0.CR1

import java.util.Date;
import java.util.HashSet;
import java.util.Set;
import javax.persistence.AttributeOverride;
import javax.persistence.AttributeOverrides;
import javax.persistence.Column;
import javax.persistence.EmbeddedId;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.JoinColumn;
import javax.persistence.JoinColumns;
import javax.persistence.ManyToOne;
import javax.persistence.OneToMany;
import javax.persistence.Table;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;

/**
 * OpcionAccion generated by hbm2java
 */
@Entity
@Table(name = "OPCION_ACCION", schema = "dbo", catalog = "SISMAV2")
public class OpcionAccion implements java.io.Serializable {

	private OpcionAccionId id;
	private Opcion opcion;
	private String nombreAccion;
	private Integer estado;
	private String usuarioCreacion;
	private Date fechaCreacion;
	private String terminalCreacion;
	private String usuarioModificacion;
	private Date fechaModificacion;
	private String terminalModificacion;
	private Integer tipoAccion;
	private Set<NivelAccesoDetalle> nivelAccesoDetalles = new HashSet<NivelAccesoDetalle>(
			0);

	public OpcionAccion() {
	}

	public OpcionAccion(OpcionAccionId id, Opcion opcion) {
		this.id = id;
		this.opcion = opcion;
	}

	public OpcionAccion(OpcionAccionId id, Opcion opcion, String nombreAccion,
			Integer estado, String usuarioCreacion, Date fechaCreacion,
			String terminalCreacion, String usuarioModificacion,
			Date fechaModificacion, String terminalModificacion,
			Integer tipoAccion, Set<NivelAccesoDetalle> nivelAccesoDetalles) {
		this.id = id;
		this.opcion = opcion;
		this.nombreAccion = nombreAccion;
		this.estado = estado;
		this.usuarioCreacion = usuarioCreacion;
		this.fechaCreacion = fechaCreacion;
		this.terminalCreacion = terminalCreacion;
		this.usuarioModificacion = usuarioModificacion;
		this.fechaModificacion = fechaModificacion;
		this.terminalModificacion = terminalModificacion;
		this.tipoAccion = tipoAccion;
		this.nivelAccesoDetalles = nivelAccesoDetalles;
	}

	@EmbeddedId
	@AttributeOverrides({
			@AttributeOverride(name = "codigoOpcionAccion", column = @Column(name = "codigoOpcionAccion", nullable = false)),
			@AttributeOverride(name = "codigoOpcion", column = @Column(name = "codigoOpcion", nullable = false)),
			@AttributeOverride(name = "codigoCategoriaOpcion", column = @Column(name = "codigoCategoriaOpcion", nullable = false)),
			@AttributeOverride(name = "codigoIdioma", column = @Column(name = "codigoIdioma", nullable = false)) })
	public OpcionAccionId getId() {
		return this.id;
	}

	public void setId(OpcionAccionId id) {
		this.id = id;
	}

	@ManyToOne(fetch = FetchType.LAZY)
	@JoinColumns({
			@JoinColumn(name = "codigoOpcion", referencedColumnName = "codigoOpcion", nullable = false, insertable = false, updatable = false),
			@JoinColumn(name = "codigoCategoriaOpcion", referencedColumnName = "codigoCategoriaOpcion", nullable = false, insertable = false, updatable = false),
			@JoinColumn(name = "codigoIdioma", referencedColumnName = "codigoIdioma", nullable = false, insertable = false, updatable = false) })
	public Opcion getOpcion() {
		return this.opcion;
	}

	public void setOpcion(Opcion opcion) {
		this.opcion = opcion;
	}

	@Column(name = "nombreAccion", length = 200)
	public String getNombreAccion() {
		return this.nombreAccion;
	}

	public void setNombreAccion(String nombreAccion) {
		this.nombreAccion = nombreAccion;
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

	@Column(name = "tipoAccion")
	public Integer getTipoAccion() {
		return this.tipoAccion;
	}

	public void setTipoAccion(Integer tipoAccion) {
		this.tipoAccion = tipoAccion;
	}

	@OneToMany(fetch = FetchType.LAZY, mappedBy = "opcionAccion")
	public Set<NivelAccesoDetalle> getNivelAccesoDetalles() {
		return this.nivelAccesoDetalles;
	}

	public void setNivelAccesoDetalles(
			Set<NivelAccesoDetalle> nivelAccesoDetalles) {
		this.nivelAccesoDetalles = nivelAccesoDetalles;
	}

}
