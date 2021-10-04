package com.client.admin.Repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.client.admin.Models.Cliente;

@Repository
public interface ClienteRepository extends JpaRepository<Cliente, Long> {

}
