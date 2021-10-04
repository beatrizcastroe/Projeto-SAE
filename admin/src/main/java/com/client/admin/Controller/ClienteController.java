package com.client.admin.Controller;

import java.util.List;

import javax.validation.Valid;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.client.admin.Models.Cliente;
import com.client.admin.Repository.ClienteRepository;


@RestController
@RequestMapping("/clientes")
@CrossOrigin("*")
public class ClienteController {
	
	@Autowired
	private ClienteRepository repository;
	
	@GetMapping
	public ResponseEntity<List<Cliente>> findAll() {
		return ResponseEntity.ok(repository.findAll());
	}
	
	@PostMapping("/cadastrar")
	public ResponseEntity<Cliente> cadastrar (@Valid @RequestBody Cliente novoCliente){
		return ResponseEntity.status(201).body(repository.save(novoCliente));
	}
	
	@PutMapping("/atualizarcliente")
	public ResponseEntity<Cliente> atualizar(@Valid @RequestBody Cliente clienteParaAtualizar) {
		return ResponseEntity.status(201).body(repository.save(clienteParaAtualizar));
	}
	
	@DeleteMapping("/deletarcliente/{id_cliente}")
	public void deletarUsuarioPorId(@PathVariable (value = "id_cliente") Long id) {
		repository.deleteById(id);
	}

}
