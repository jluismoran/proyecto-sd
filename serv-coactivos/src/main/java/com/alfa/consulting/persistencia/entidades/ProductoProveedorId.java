package com.alfa.consulting.persistencia.entidades;

// Generated 07/05/2012 01:03:00 AM by Hibernate Tools 3.4.0.CR1

import javax.persistence.Column;
import javax.persistence.Embeddable;

/**
 * ProductoProveedorId generated by hbm2java
 */
@Embeddable
public class ProductoProveedorId implements java.io.Serializable {

	private int codigoProveedorMantenimiento;
	private int codigoProducto;
	private int codigoProveedor;

	public ProductoProveedorId() {
	}

	public ProductoProveedorId(int codigoProveedorMantenimiento,
			int codigoProducto, int codigoProveedor) {
		this.codigoProveedorMantenimiento = codigoProveedorMantenimiento;
		this.codigoProducto = codigoProducto;
		this.codigoProveedor = codigoProveedor;
	}

	@Column(name = "codigoProveedorMantenimiento", nullable = false)
	public int getCodigoProveedorMantenimiento() {
		return this.codigoProveedorMantenimiento;
	}

	public void setCodigoProveedorMantenimiento(int codigoProveedorMantenimiento) {
		this.codigoProveedorMantenimiento = codigoProveedorMantenimiento;
	}

	@Column(name = "codigoProducto", nullable = false)
	public int getCodigoProducto() {
		return this.codigoProducto;
	}

	public void setCodigoProducto(int codigoProducto) {
		this.codigoProducto = codigoProducto;
	}

	@Column(name = "codigoProveedor", nullable = false)
	public int getCodigoProveedor() {
		return this.codigoProveedor;
	}

	public void setCodigoProveedor(int codigoProveedor) {
		this.codigoProveedor = codigoProveedor;
	}

	public boolean equals(Object other) {
		if ((this == other))
			return true;
		if ((other == null))
			return false;
		if (!(other instanceof ProductoProveedorId))
			return false;
		ProductoProveedorId castOther = (ProductoProveedorId) other;

		return (this.getCodigoProveedorMantenimiento() == castOther
				.getCodigoProveedorMantenimiento())
				&& (this.getCodigoProducto() == castOther.getCodigoProducto())
				&& (this.getCodigoProveedor() == castOther.getCodigoProveedor());
	}

	public int hashCode() {
		int result = 17;

		result = 37 * result + this.getCodigoProveedorMantenimiento();
		result = 37 * result + this.getCodigoProducto();
		result = 37 * result + this.getCodigoProveedor();
		return result;
	}

}
