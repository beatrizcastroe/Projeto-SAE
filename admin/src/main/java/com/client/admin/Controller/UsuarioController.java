package com.client.admin.Controller;

import java.util.Optional;

import javax.validation.Valid;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;
import org.springframework.web.server.ResponseStatusException;

import com.client.admin.Models.Usuario;
import com.client.admin.Models.UsuarioLogin;
import com.client.admin.Services.UsuarioServicos;

@RestController
@RequestMapping("/usuarioadmin")
@CrossOrigin(origins = "*", allowedHeaders = "*")
public class UsuarioController {
	
	private @Autowired UsuarioServicos services;
	
	@PostMapping("/salvar")
	public ResponseEntity<Object> salvar(@Valid @RequestBody Usuario novoUsuario) {
		Optional<Object> objetoOptional = services.cadastrarUsuario(novoUsuario);

		if (objetoOptional.isEmpty()) {
			throw new ResponseStatusException(HttpStatus.BAD_REQUEST, "Usuário existente!", null);
		} else {
			return ResponseEntity.status(201).body(objetoOptional.get());
		}
	}
	
	@PutMapping("/login")
	public ResponseEntity<Object> credenciais(@Valid @RequestBody UsuarioLogin usuarioAuth){
		Optional<?> objetoOptional = services.Login(usuarioAuth);

		if (objetoOptional.isEmpty()) {
			return ResponseEntity.status(400).build();
		} else {
			return ResponseEntity.status(201).body(objetoOptional.get());
		}
	}

}
