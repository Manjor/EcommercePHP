CREATE DEFINER=`root`@`localhost` PROCEDURE `addProduto`(
	IN v_nomeproduto varchar(150),
    IN v_descricao varchar(150),
    IN v_modelo varchar(100),
    IN v_quantidade int,
    IN v_valor float,
    IN v_endereco varchar(250),
	IN v_categoria int,
    IN v_marca int
)
BEGIN
	INSERT INTO produto
    (
		nomeproduto,
        descricao,
        modelo,
        quantidade,
        valor,
        endereco,
        categoria_fk,
        marca_fk
    )
    VALUES
    (
		v_nomeproduto,
        v_descricao,
        v_modelo,
        v_quantidade,
        v_valor,
        v_endereco,
        v_categoria,
        v_marca
    );
	
END