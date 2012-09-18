package com.alfa.consulting.persistencia.dao.base;

import java.lang.reflect.ParameterizedType;
import java.lang.reflect.Type;
import java.lang.reflect.TypeVariable;

import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;

import org.springframework.transaction.annotation.Transactional;

public class EntityDaoImpl<E>  implements EntityDao<E> {
	
	@PersistenceContext
	protected
	EntityManager entityManager;
	
	protected E instance;
	private Class<E> entityClass;
	
	public EntityManager getEntityManager() {
		return entityManager;
	}

	public void setEntityManager(EntityManager entityManager) {
		this.entityManager = entityManager;
	}

	@Transactional
	public void guardar(E e){
		getEntityManager().persist(e);
	}

	@Transactional
	public void actualizar(E e){
		getEntityManager().merge(e);
	}

	@Transactional
	public void eliminar(Object id){
		getEntityManager().remove(findById(id));
	}

	public E findById(Object id) {
		return (E)getEntityManager().find(getEntityClass(), id);	
	}
	

	
	@SuppressWarnings("unchecked")
	public Class<E> getEntityClass() {		
	               if (entityClass == null) {
		                    Type type = getClass().getGenericSuperclass();
		                  if (type instanceof  ParameterizedType) {
		                       ParameterizedType paramType = (ParameterizedType) type;
		                      if (paramType.getActualTypeArguments().length == 2) {
		                            if (paramType.getActualTypeArguments()[1] instanceof  TypeVariable) {
		                               throw new IllegalArgumentException(
	                                      "Could not guess entity class by reflection");
		                           }
		                            else {
		                               entityClass = (Class<E>) paramType
		                                       .getActualTypeArguments()[1];
		                          }
		                       } else {
		                          entityClass = (Class<E>) paramType
		                                    .getActualTypeArguments()[0];
		                        }
		                   } else {
		                        throw new IllegalArgumentException(
		                               "Could not guess entity class by reflection");
		                  }
		                }
		               return entityClass;
		           }
	
}
