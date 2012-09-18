package com.alfa.consulting.persistencia.dao.base;

public interface EntityDao<E> {

	void guardar(E e);
	
	void actualizar(E e) ;
	
	void eliminar(Object id);
	
	E findById(Object id);
}
