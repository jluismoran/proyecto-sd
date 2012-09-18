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
 * ProblemaAdjunto generated by hbm2java
 */
@Entity
@Table(name = "PROBLEMA_ADJUNTO", schema = "dbo", catalog = "SISMAV2")
public class ProblemaAdjunto implements java.io.Serializable {

	private ProblemaAdjuntoId id;
	private Problema problema;
	private String nombreArchivo;
	private String nombreArchivoOriginal;
	private String extension;
	private String tamanio;
	private String descripcion;
	private Integer tipoAdjunto;
	private Integer estado;
	private String usuarioCreacion;
	private Date fechaCreacion;
	private String terminalCreacion;
	private String usuarioModificacion;
	private Date fechaModificacion;
	private String terminalModificacion;

	public ProblemaAdjunto() {
	}

	public ProblemaAdjunto(ProblemaAdjuntoId id, Problema problema) {
		this.id = id;
		this.problema = problema;
	}

	public ProblemaAdjunto(ProblemaAdjuntoId id, Problema problema,
			String nombreArchivo, String nombreArchivoOriginal,
			String extension, String tamanio, String descripcion,
			Integer tipoAdjunto, Integer estado, String usuarioCreacion,
			Date fechaCreacion, String terminalCreacion,
			String usuarioModificacion, Date fechaModificacion,
			String terminalModificacion) {
		this.id = id;
		this.problema = problema;
		this.nombreArchivo = nombreArchivo;
		this.nombreArchivoOriginal = nombreArchivoOriginal;
		this.extension = extension;
		this.tamanio = tamanio;
		this.descripcion = descripcion;
		this.tipoAdjunto = tipoAdjunto;
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
			@AttributeOverride(name = "codigoProblema", column = @Column(name = "codigoProblema", nullable = false)) })
	public ProblemaAdjuntoId getId() {
		return this.id;
	}

	public void setId(ProblemaAdjuntoId id) {
		this.id = id;
	}

	@ManyToOne(fetch = FetchType.LAZY)
	@JoinColumn(name = "codigoProblema", nullable = false, insertable = false, updatable = false)
	public Problema getProblema() {
		return this.problema;
	}

	public void setProblema(Problema problema) {
		this.problema = problema;
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

	@Column(name = "descripcion", length = 500)
	public String getDescripcion() {
		return this.descripcion;
	}

	public void setDescripcion(String descripcion) {
		this.descripcion = descripcion;
	}

	@Column(name = "tipoAdjunto")
	public Integer getTipoAdjunto() {
		return this.tipoAdjunto;
	}

	public void setTipoAdjunto(Integer tipoAdjunto) {
		this.tipoAdjunto = tipoAdjunto;
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