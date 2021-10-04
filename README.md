# Projeto Sistema de Administração de Clientes em PHP com MySQL

Este projeto faz parte do processo seletivo da KaBum!: um desafio técnico fullstack com o objetivo de criar uma área administrativa onde o usuário acessa com login e senha; um gerenciador de clientes com os CRUD's onde um cliente pode ter 1 ou N endereços. Todo o projeto foi desenvolvido utilizando PHP (sem frameworks), JavaScript e HTML. 

## Pré-requisitos da Montagem

1. Durante esse projeto, foi utilizado o aplicativo XAMPP onde iniciei o servidor apache e o MySQL. 
2. Dentro da pasta xampp -> htdocs foi criada a pasta do projeto SAE, pois assim ele é hospedado no apache server na porta 'localhost/SAE', sendo neste local o index.
3. No phpMyAdmin foi criada a database "db_empresa", as tabelas "usuarios", "clientes" e "endereços" (este foi criada uma foreign key idCliente que faz o relacionamento de 1 cliente para N endereços). Este banco de dados está previamente criado na pasta assets/db e pode ser utilizado para teste.
4. Na tabela "usuarios" foram adicionados os atributos: id, nome, email, senha;
5. Na tabela "clientes" foram adicionados os atributos: id, nome, cpf, dataNasc, rg;
6. Na tabela "enderecos" foram adicionados os atributos: id, endereco, numero, comp (complemento), bairro, cep, cidade, estado, idCliente;
7. Foi utilizado o framework bootstrap no front-end, sendo assim utilizei também JavaScript para algumas validações. 
8. O projeto foi rganizado de acordo com a arquitetura MVC.
9. A metodologia de organização de tempo foi baseada na SCRUM, mesmo que com apenas 1 pessoa envolvida.

## Sobre a autora

Meu nome é Beatriz Castro, tenho 22 anos e no bootcamp da Generation Brasil. Lá, além dos meus aprimoramentos nas soft-skills, a parte técnica foi voltada para JAVA e seus frameworks. Sendo assim, diante da proposta do processo técnico da KaBum!, me vi desafiada em aprender uma nova linguagem e, com muita dedicação, persistencia e proatividade, me vi nessa semana aprendendo php e conseguindo executar a proposta. Me sinto muito feliz e realizada de poder fazer parte dessa empresa que admiro e agradeço a oportunidade de participar, pois aprendi muito com o trabalho, e acredito que ao ser admitida, aprenderei muito mais! 

## Projeto

<img  src="https://imgur.com/CUqzGPH.gif">

### Pontos a melhorar

Visto todo o desenvolvimento do projeto, minhas próximas melhorias serão na parte de encapsulamento de dados, segurança da aplicação e alguns redrects.
