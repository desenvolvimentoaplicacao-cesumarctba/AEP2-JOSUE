<?php


	require_once 'Pessoa.php';

	$p = new Pessoa("João", 19980123, 70.0, 1.80, 11212323422);

	$p->validaCpf(23143522322);
	$p->calculaImc($p);
	$p->calculaIdade($p);
