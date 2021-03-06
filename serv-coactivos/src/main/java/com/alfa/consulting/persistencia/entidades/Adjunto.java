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
import javax.persistence.JoinColumns;
import javax.persistence.ManyToOne;
import javax.persistence.Table;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;

/**
 * Adjunto generated by hbm2java
 */
@Entity
@Table(name = "ADJUNTO", schema = "dbo", catalog = "SISMAV2")
public class Adjunto implements java.io.Serializable {

	private AdjuntoId id;
	private Solicitud solicitud;
	private String nombreArchivo;
	private String nombreArchivoOriginal;
	private String extension;
	private String tamanio;
	private String ruta;
	private Integer estado;
	private String usuarioCreacion;
	private Date fechaCreacion;
	private String terminalCreacion;
	private String usuarioModificacion;
	private Date fechaModificacion;
	private String terminalModificacion;

	public Adjunto() {
	}

	public Adjunto(AdjuntoId id, Solicitud solicitud) {
		this.id = id;
		this.solicitud = solicitud;
	}

	public Adjunto(AdjuntoId id, Solicitud solicitud, String nombreArchivo,
			String nombreArchivoOriginal, String extension, String tamanio,
			String ruta, Integer estado, String usuarioCreacion,
			Date fechaCreacion, String terminalCreacion,
			String usuarioModificacion, Date fechaModificacion,
			String terminalModificacion) {
		this.id = id;
		this.solicitud = solicitud;
		this.nombreArchivo = nombreArchivo;
		this.nombreArchivoOriginal = nombreArchivoOriginal;
		this.extension = extension;
		this.tamanio = tamanio;
		this.ruta = ruta;
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
			@AttributeOverride(name = "codigoAdjunto", column = @Column(name = "codigoAdjunto", nullable = false)),
			@AttributeOverride(name = "codigoSolicitud", column = @Column(name = "codigoSolicitud", nullable = false)),
			@AttributeOverride(name = "codigoUsuario", column = @Column(name = "codigoUsuario", nullable = false)) })
	public AdjuntoId getId() {
		return this.id;
	}

	public void setId(AdjuntoId id) {
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

	@Column(name = "nombreArchivo", length = 100)
	public String getNombreArchivo() {
		return this.nombreArchivo;
	}

	public void setNombreArchivo(String nombreArchivo) {
		this.nombreArchivo = nombreArchivo;
	}

	@Column(name = "nombreArchivoOriginal", length = 100)
	public String getNombreArchivoOriginal() {
		return this.nombreArchivoOriginal;
	}

	public void setNombreArchivoOriginal(String nombreArchivoOriginal) {
		this.nombreArchivoOriginal = nombreArchivoOriginal;
	}

	@Column(name = "extension", length = 20)
	public String getExtension() {
		return this.extension;
	}

	public void setExtension(String extension) {
		this.extension = extension;
	}

	@Column(name = "tamanio", length = 20)
	public String getTamanio() {
		return this.tamanio;
	}

	public void setTamanio(String tamanio) {
		this.tamanio = tamanio;
	}

	@Column(name = "ruta", length = 100)
	public String getRuta() {
		return this.ruta;
	}

	public void setRuta(String ruta) {
		this.ruta = ruta;
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
