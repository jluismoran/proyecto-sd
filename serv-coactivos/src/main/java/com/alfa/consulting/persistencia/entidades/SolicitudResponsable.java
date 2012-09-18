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
import javax.persistence.OneToOne;
import javax.persistence.Table;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;

/**
 * SolicitudResponsable generated by hbm2java
 */
@Entity
@Table(name = "SOLICITUD_RESPONSABLE", schema = "dbo", catalog = "SISMAV2")
public class SolicitudResponsable implements java.io.Serializable {

	private SolicitudResponsableId id;
	private Solicitud solicitud;
	private Tecnico tecnico;
	private Integer estado;
	private String usuarioCreacion;
	private Date fechaCreacion;
	private String terminalCreacion;
	private String usuarioModificacion;
	private Date fechaModificacion;
	private String terminalModificacion;
	private String solucion;
	private SolicitudAprobacion solicitudAprobacion;
	private Set<Conversacion> conversacions = new HashSet<Conversacion>(0);

	public SolicitudResponsable() {
	}

	public SolicitudResponsable(SolicitudResponsableId id, Solicitud solicitud,
			Tecnico tecnico) {
		this.id = id;
		this.solicitud = solicitud;
		this.tecnico = tecnico;
	}

	public SolicitudResponsable(SolicitudResponsableId id, Solicitud solicitud,
			Tecnico tecnico, Integer estado, String usuarioCreacion,
			Date fechaCreacion, String terminalCreacion,
			String usuarioModificacion, Date fechaModificacion,
			String terminalModificacion, String solucion,
			SolicitudAprobacion solicitudAprobacion,
			Set<Conversacion> conversacions) {
		this.id = id;
		this.solicitud = solicitud;
		this.tecnico = tecnico;
		this.estado = estado;
		this.usuarioCreacion = usuarioCreacion;
		this.fechaCreacion = fechaCreacion;
		this.terminalCreacion = terminalCreacion;
		this.usuarioModificacion = usuarioModificacion;
		this.fechaModificacion = fechaModificacion;
		this.terminalModificacion = terminalModificacion;
		this.solucion = solucion;
		this.solicitudAprobacion = solicitudAprobacion;
		this.conversacions = conversacions;
	}

	@EmbeddedId
	@AttributeOverrides({
			@AttributeOverride(name = "codigoSolicitud", column = @Column(name = "codigoSolicitud", nullable = false)),
			@AttributeOverride(name = "codigoSolicitudResponsable", column = @Column(name = "codigoSolicitudResponsable", nullable = false)),
			@AttributeOverride(name = "codigoUsuario", column = @Column(name = "codigoUsuario", nullable = false)),
			@AttributeOverride(name = "codigoTecnico", column = @Column(name = "codigoTecnico", nullable = false)) })
	public SolicitudResponsableId getId() {
		return this.id;
	}

	public void setId(SolicitudResponsableId id) {
		this.id = id;
	}

	@ManyToOne(fetch = FetchType.LAZY)
	@JoinColumns({
			@JoinColumn(name = "codigoSolicitud", referencedColumnName = "codigoSolicitud", nullable = false, insertable = false, updatable = false),
			@JoinColumn(name = "codigoUsuario", referencedColumnName = "codigoUsuario", nullable = false, insertable = false, updatable = false) })
	public Solicitud getSolicitud() {
		return this.solicitud;
	}

	public void setSolicitud(Solicitud solicitud) {
		this.solicitud = solicitud;
	}

	@ManyToOne(fetch = FetchType.LAZY)
	@JoinColumn(name = "codigoTecnico", nullable = false, insertable = false, updatable = false)
	public Tecnico getTecnico() {
		return this.tecnico;
	}

	public void setTecnico(Tecnico tecnico) {
		this.tecnico = tecnico;
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

	@Column(name = "solucion", length = 5000)
	public String getSolucion() {
		return this.solucion;
	}

	public void setSolucion(String solucion) {
		this.solucion = solucion;
	}

	@OneToOne(fetch = FetchType.LAZY, mappedBy = "solicitudResponsable")
	public SolicitudAprobacion getSolicitudAprobacion() {
		return this.solicitudAprobacion;
	}

	public void setSolicitudAprobacion(SolicitudAprobacion solicitudAprobacion) {
		this.solicitudAprobacion = solicitudAprobacion;
	}

	@OneToMany(fetch = FetchType.LAZY, mappedBy = "solicitudResponsable")
	public Set<Conversacion> getConversacions() {
		return this.conversacions;
	}

	public void setConversacions(Set<Conversacion> conversacions) {
		this.conversacions = conversacions;
	}

}