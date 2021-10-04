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

import com.client.admin.Models.Endereco;
import com.client.admin.Repository.EnderecoRepository;

@RestController
@RequestMapping("/enderecos")
@CrossOrigin("*")
public class EnderecoController {
	
	@Autowired
	private EnderecoRepository repository;
	
	@GetMapping
	public ResponseEntity<List<Endereco>> findAll() {
		return ResponseEntity.ok(repository.findAll());
	}
	
	@PostMapping("/cadastrar")
	public ResponseEntity<Endereco> cadastrar (@Valid @RequestBody Endereco novoEndereco){
		return ResponseEntity.status(201).body(repository.save(novoEndereco));
	}
	
	@PutMapping("/atualizarcliente")
	public ResponseEntity<Endereco> atualizar(@Valid @RequestBody Endereco endParaAtualizar) {
		return ResponseEntity.status(201).body(repository.save(endParaAtualizar));
	}
	
	@DeleteMapping("/deletar/{id_endereco}")
	public void deletarEndPorId(@PathVariable (value = "id_endereco") Long id) {
		repository.deleteById(id);
	}

}
