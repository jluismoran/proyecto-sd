package com.alfa.consulting.persistencia.entidades;

// Generated 07/05/2012 01:03:00 AM by Hibernate Tools 3.4.0.CR1

import java.util.Date;
import javax.persistence.AttributeOverride;
import javax.persistence.AttributeOverrides;
import javax.persistence.Column;
import javax.persistence.EmbeddedId;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.Table;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;

/**
 * CambioNotificacion generated by hbm2java
 */
@Entity
@Table(name = "CAMBIO_NOTIFICACION", schema = "dbo", catalog = "SISMAV2")
public class CambioNotificacion implements java.io.Serializable {

	private CambioNotificacionId id;
	private Cambio cambio;
	private String a;
	private String cc;
	private String asunto;
	private String descripcion;
	private Integer estado;
	private String usuarioCreacion;
	private Date fechaCreacion;
	private String terminalCreacion;
	private String usuarioModificacion;
	private Date fechaModificacion;
	private String terminalModificacion;

	public CambioNotificacion() {
	}

	public CambioNotificacion(CambioNotificacionId id, Cambio cambio) {
		this.id = id;
		this.cambio = cambio;
	}

	public CambioNotificacion(CambioNotificacionId id, Cambio cambio, String a,
			String cc, String asunto, String descripcion, Integer estado,
			String usuarioCreacion, Date fechaCreacion,
			String terminalCreacion, String usuarioModificacion,
			Date fechaModificacion, String terminalModificacion) {
		this.id = id;
		this.cambio = cambio;
		this.a = a;
		this.cc = cc;
		this.asunto = asunto;
		this.descripcion = descripcion;
		this.estado = estado;
		this.usuarioCreacion = usuarioCreacion;
		this.fechaCreacion = fechaCreacion;
		this.terminalCreacion = terminalCreacion;
		this.usuarioModificacion = usuarioModificacion;
		this.fechaModificacion = fechaModificacion;
		this.terminalModificacion = terminalModificacion;
	}

	@EmbeddedId
	@AttributeOverrides({
			@AttributeOverride(name = "codigoNotificacion", column = @Column(name = "codigoNotificacion", nullable = false)),
			@AttributeOverride(name = "codigoCambio", column = @Column(name = "codigoCambio", nullable = false)) })
	public CambioNotificacionId getId() {
		return this.id;
	}

	public void setId(CambioNotificacionId id) {
		this.id = id;
	}

	@ManyToOne(fetch = FetchType.LAZY)
	@JoinColumn(name = "codigoCambio", nullable = false, insertable = false, updatable = false)
	public Cambio getCambio() {
		return this.cambio;
	}

	public void setCambio(Cambio cambio) {
		this.cambio = cambio;
	}

	@Column(name = "a", length = 100)
	public String getA() {
		return this.a;
	}

	public void setA(String a) {
		this.a = a;
	}

	@Column(name = "cc", length = 100)
	public String getCc() {
		return this.cc;
	}

	public void setCc(String cc) {
		this.cc = cc;
	}

	@Column(name = "asunto", length = 100)
	public String getAsunto() {
		return this.asunto;
	}

	public void setAsunto(String asunto) {
		this.asunto = asunto;
	}

	@Column(name = "descripcion", length = 5000)
	public String getDescripcion() {
		return this.descripcion;
	}

	public void setDescripcion(String descripcion) {
		this.descripcion = descripcion;
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

}
