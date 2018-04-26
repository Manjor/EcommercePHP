CREATE DEFINER=`root`@`localhost` PROCEDURE `addUsuario`(
	
	IN v_nome varchar(250),
    IN v_cpf varchar(50),
    IN v_email varchar(250),
    IN v_nascimento date,
    IN v_sexo int,
    IN v_senha varchar(100),
    IN v_codigo int,
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

    declare cidadeId int;
    declare enderecoId int;
    declare usuarioId int;
    
    
    INSERT INTO cidade
    (
		nomecidade,
        estado_fk
    )
    VALUES
    (
		v_cidade,
        v_estado
    );
    
    set cidadeId = LAST_INSERT_ID();
    
    INSERT INTO endereco
    (
		logradouro,
        bairro,
        complemento,
        cep,
        cidade_fk
	)
    VALUES
    (
		v_logradouro,
        v_bairro,
        v_complemento,
        v_cep,
        cidadeId
    );
    
    set enderecoId =  LAST_INSERT_ID();
    INSERT INTO usuario
    (
		nome,
        cpf,
        email,
        nascimento,
        fk_sexo,
        senha,
        codigo,
        fk_endereco
    )
    VALUES
    (
		v_nome,
        v_cpf,
        v_email,
        v_nascimento,
        v_sexo,
        v_senha,
        v_codigo,
        enderecoId
    );
    
    set usuarioId = LAST_INSERT_ID();
    
    INSERT INTO contato
    (
		telefone,
        celular,
        usuario_fk
    )
    VALUES
    (
		v_telefone,
        v_celular,
        usuarioId
    );
END