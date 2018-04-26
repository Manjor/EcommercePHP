CREATE DEFINER=`root`@`localhost` PROCEDURE `alterarUsuario`(
	IN v_idusuario int,
    IN v_nome varchar(250),
    IN v_email varchar(250),
    IN v_nascimento date,
    IN v_logradouro varchar(250),
    IN v_bairro varchar(150),
    IN v_complemento varchar(150),
    IN v_cep varchar(50),
    IN v_cidade varchar(250),
    IN v_estado int,
    IN v_telefone varchar(30),
    IN v_celular varchar(30)

)
BEGIN
	
	SET SQL_SAFE_UPDATES =0;
    UPDATE
    contato,
    usuario,
    endereco,
    cidade,
    estado
    SET 
    contato.telefone = v_telefone,
    contato.celular = v_celular,
    usuario.nome = v_nome,
    usuario.email = v_email,
    usuario.nascimento = v_nascimento,
    endereco.logradouro = v_logradouro,
    endereco.bairro = v_bairro,
    endereco.complemento = v_complemento,
    endereco.cep = v_cep,
    cidade.nomecidade = v_cidade,
    cidade.estado_fk = v_estado
	WHERE 
    (usuario.idusuario = v_idusuario)
    AND
    (contato.usuario_fk = v_idusuario)
    AND
    (usuario.fk_endereco = endereco.idendereco);
    
END