-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: loja
-- ------------------------------------------------------
-- Server version	5.7.19-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Temporary view structure for view `verusuario`
--

DROP TABLE IF EXISTS `verusuario`;
/*!50001 DROP VIEW IF EXISTS `verusuario`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `verusuario` AS SELECT 
 1 AS `telefone`,
 1 AS `celular`,
 1 AS `idusuario`,
 1 AS `nome`,
 1 AS `cpf`,
 1 AS `email`,
 1 AS `nascimento`,
 1 AS `status`,
 1 AS `logradouro`,
 1 AS `bairro`,
 1 AS `complemento`,
 1 AS `cep`,
 1 AS `nomecidade`,
 1 AS `nomeestado`,
 1 AS `nomesexo`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `verusuario`
--

/*!50001 DROP VIEW IF EXISTS `verusuario`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `verusuario` AS select distinct `t`.`telefone` AS `telefone`,`t`.`celular` AS `celular`,`u`.`idusuario` AS `idusuario`,`u`.`nome` AS `nome`,`u`.`cpf` AS `cpf`,`u`.`email` AS `email`,`u`.`nascimento` AS `nascimento`,`u`.`status` AS `status`,`e`.`logradouro` AS `logradouro`,`e`.`bairro` AS `bairro`,`e`.`complemento` AS `complemento`,`e`.`cep` AS `cep`,`c`.`nomecidade` AS `nomecidade`,`es`.`nomeestado` AS `nomeestado`,`s`.`nomesexo` AS `nomesexo` from (((((`contato` `t` join `usuario` `u`) join `endereco` `e`) join `cidade` `c`) join `estado` `es`) join `sexo` `s` on(((`t`.`usuario_fk` = `u`.`idusuario`) and (`u`.`fk_sexo` = `s`.`idsexo`) and (`u`.`fk_endereco` = `e`.`idendereco`) and (`c`.`estado_fk` = `es`.`idestado`)))) order by `u`.`idusuario` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Dumping events for database 'loja'
--

--
-- Dumping routines for database 'loja'
--
/*!50003 DROP PROCEDURE IF EXISTS `addProduto` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
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
	
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `addUsuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
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
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `alterarUsuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
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
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `verUsuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
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
	
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-23 16:25:26
