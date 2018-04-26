CREATE DEFINER=`root`@`localhost` PROCEDURE `verUsuario`(IN v_email varchar(250))
BEGIN
	
	SELECT DISTINCT 
    co.telefone,
    co.celular,
    u.nome,
    u.cpf,
    u.email,
    u.nascimento,
    en.logradouro,
    en.bairro,
    en.complemento,
    en.cep,
    ci.nomecidade,
    es.uf
    
    
    
    FROM contato AS co 
    JOIN usuario AS u 
    JOIN endereco As en
	JOIN cidade AS ci
    JOIN estado AS es
    
	ON (co.usuario_fk = u.idusuario)
    AND (u.fk_endereco = en.idendereco)
    AND (en.cidade_fk = ci.idcidade)
    AND (ci.estado_fk = es.idestado)
    WHERE (u.email = v_email);
	
END