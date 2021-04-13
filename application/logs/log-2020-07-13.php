<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-13 14:26:53 --> 404 Page Not Found: Site/assets
ERROR - 2020-07-13 14:26:53 --> 404 Page Not Found: Site/assets
ERROR - 2020-07-13 14:37:31 --> Severity: Notice --> Undefined variable: i_saldo_inicial /home/www/html/sistemas/realize/application/views/cliente/plano.php 77
ERROR - 2020-07-13 14:37:31 --> Severity: Notice --> Undefined variable: i_saldo_inicial /home/www/html/sistemas/realize/application/views/cliente/plano.php 87
ERROR - 2020-07-13 14:37:31 --> Severity: Notice --> Undefined variable: i_saldo_inicial /home/www/html/sistemas/realize/application/views/cliente/plano.php 82
ERROR - 2020-07-13 14:37:50 --> Severity: Notice --> Undefined variable: i_saldo_inicial /home/www/html/sistemas/realize/application/views/cliente/plano.php 77
ERROR - 2020-07-13 14:37:50 --> Severity: Notice --> Undefined variable: i_saldo_inicial /home/www/html/sistemas/realize/application/views/cliente/plano.php 87
ERROR - 2020-07-13 14:37:50 --> Severity: Notice --> Undefined variable: i_saldo_inicial /home/www/html/sistemas/realize/application/views/cliente/plano.php 82
ERROR - 2020-07-13 15:31:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'TImes_anoTAMP DEFAULT CURRENT_TImes_anoTAMP,
	CONSTRAINT fk_ma_idCliente FOREIGN' at line 7 - Invalid query: CREATE TABLE `mes_ano` (
	`ma_id` INT(9) UNSIGNED NOT NULL AUTO_INCREMENT,
	`ma_idCliente` INT(9) UNSIGNED NOT NULL,
	`ma_mesAno` varchar(50) NOT NULL,
	`ma_capitalInicial` double(9,2) NULL DEFAULT NULL,
	`ma_metaDIaria` double(9,2) NULL DEFAULT NULL,
	`ma_dataCadastro` TImes_anoTAMP DEFAULT CURRENT_TImes_anoTAMP,
	CONSTRAINT fk_ma_idCliente FOREIGN KEY (`ma_idCliente`) REFERENCES `clientes`(`cli_id`),
	CONSTRAINT `pk_mes_ano` PRIMARY KEY(`ma_id`)
) DEFAULT CHARACTER SET = utf8 COLLATE = utf8_general_ci
ERROR - 2020-07-13 15:32:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'TImes_anoTAMP DEFAULT CURRENT_TImes_anoTAMP,
	CONSTRAINT fk_ma_idCliente FOREIGN' at line 7 - Invalid query: CREATE TABLE `mes_ano` (
	`ma_id` INT(9) UNSIGNED NOT NULL AUTO_INCREMENT,
	`ma_idCliente` INT(9) UNSIGNED NOT NULL,
	`ma_mesAno` varchar(50) NOT NULL,
	`ma_capitalInicial` double(9,2) NULL DEFAULT NULL,
	`ma_metaDIaria` double(9,2) NULL DEFAULT NULL,
	`ma_dataCadastro` TImes_anoTAMP DEFAULT CURRENT_TImes_anoTAMP,
	CONSTRAINT fk_ma_idCliente FOREIGN KEY (`ma_idCliente`) REFERENCES `clientes`(`cli_id`),
	CONSTRAINT `pk_mes_ano` PRIMARY KEY(`ma_id`)
) DEFAULT CHARACTER SET = utf8 COLLATE = utf8_general_ci
ERROR - 2020-07-13 15:32:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'TImes_anoTAMP DEFAULT CURRENT_TImes_anoTAMP,
	CONSTRAINT fk_ma_idCliente FOREIGN' at line 7 - Invalid query: CREATE TABLE `mes_ano` (
	`ma_id` INT(9) UNSIGNED NOT NULL AUTO_INCREMENT,
	`ma_idCliente` INT(9) UNSIGNED NOT NULL,
	`ma_mesAno` varchar(50) NOT NULL,
	`ma_capitalInicial` double(9,2) NULL DEFAULT NULL,
	`ma_metaDIaria` double(9,2) NULL DEFAULT NULL,
	`ma_dataCadastro` TImes_anoTAMP DEFAULT CURRENT_TImes_anoTAMP,
	CONSTRAINT fk_ma_idCliente FOREIGN KEY (`ma_idCliente`) REFERENCES `clientes`(`cli_id`),
	CONSTRAINT `pk_mes_ano` PRIMARY KEY(`ma_id`)
) DEFAULT CHARACTER SET = utf8 COLLATE = utf8_general_ci
ERROR - 2020-07-13 15:32:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'TImes_anoTAMP DEFAULT CURRENT_TImes_anoTAMP,
	CONSTRAINT fk_ma_idCliente FOREIGN' at line 7 - Invalid query: CREATE TABLE `mes_ano` (
	`ma_id` INT(9) UNSIGNED NOT NULL AUTO_INCREMENT,
	`ma_idCliente` INT(9) UNSIGNED NOT NULL,
	`ma_mesAno` varchar(50) NOT NULL,
	`ma_capitalInicial` double(9,2) NULL DEFAULT NULL,
	`ma_metaDIaria` double(9,2) NULL DEFAULT NULL,
	`ma_dataCadastro` TImes_anoTAMP DEFAULT CURRENT_TImes_anoTAMP,
	CONSTRAINT fk_ma_idCliente FOREIGN KEY (`ma_idCliente`) REFERENCES `clientes`(`cli_id`),
	CONSTRAINT `pk_mes_ano` PRIMARY KEY(`ma_id`)
) DEFAULT CHARACTER SET = utf8 COLLATE = utf8_general_ci
ERROR - 2020-07-13 15:32:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'TImes_anoTAMP DEFAULT CURRENT_TImes_anoTAMP,
	CONSTRAINT fk_ma_idCliente FOREIGN' at line 7 - Invalid query: CREATE TABLE `mes_ano` (
	`ma_id` INT(9) UNSIGNED NOT NULL AUTO_INCREMENT,
	`ma_idCliente` INT(9) UNSIGNED NOT NULL,
	`ma_mesAno` varchar(50) NOT NULL,
	`ma_capitalInicial` double(9,2) NULL DEFAULT NULL,
	`ma_metaDIaria` double(9,2) NULL DEFAULT NULL,
	`ma_dataCadastro` TImes_anoTAMP DEFAULT CURRENT_TImes_anoTAMP,
	CONSTRAINT fk_ma_idCliente FOREIGN KEY (`ma_idCliente`) REFERENCES `clientes`(`cli_id`),
	CONSTRAINT `pk_mes_ano` PRIMARY KEY(`ma_id`)
) DEFAULT CHARACTER SET = utf8 COLLATE = utf8_general_ci
ERROR - 2020-07-13 15:34:03 --> 404 Page Not Found: Assets/js
ERROR - 2020-07-13 15:34:04 --> 404 Page Not Found: Assets/js
ERROR - 2020-07-13 15:38:43 --> 404 Page Not Found: Cliente/mes_edit
ERROR - 2020-07-13 15:42:25 --> Severity: error --> Exception: syntax error, unexpected '}', expecting end of file /home/www/html/sistemas/realize/application/controllers/Cliente.php 241
ERROR - 2020-07-13 15:44:48 --> Severity: Notice --> Undefined variable: mes_ano /home/www/html/sistemas/realize/application/controllers/Cliente.php 144
ERROR - 2020-07-13 15:44:48 --> Severity: Notice --> Undefined variable: ano /home/www/html/sistemas/realize/application/views/cliente/trades.php 86
ERROR - 2020-07-13 15:45:38 --> Severity: Notice --> Undefined property: stdClass::$tra_data /home/www/html/sistemas/realize/application/views/cliente/mes_edit.php 22
ERROR - 2020-07-13 15:45:38 --> Severity: Notice --> Undefined property: stdClass::$tra_tickt /home/www/html/sistemas/realize/application/views/cliente/mes_edit.php 26
ERROR - 2020-07-13 15:45:38 --> Severity: Notice --> Undefined property: stdClass::$tra_quantOperacoesV /home/www/html/sistemas/realize/application/views/cliente/mes_edit.php 32
ERROR - 2020-07-13 15:45:38 --> Severity: Notice --> Undefined property: stdClass::$tra_quantOperacoesP /home/www/html/sistemas/realize/application/views/cliente/mes_edit.php 36
ERROR - 2020-07-13 15:45:38 --> Severity: Notice --> Undefined property: stdClass::$tra_quantContatos /home/www/html/sistemas/realize/application/views/cliente/mes_edit.php 40
ERROR - 2020-07-13 15:45:38 --> Severity: Notice --> Undefined property: stdClass::$tra_ganhos /home/www/html/sistemas/realize/application/views/cliente/mes_edit.php 46
ERROR - 2020-07-13 15:45:38 --> Severity: Notice --> Undefined property: stdClass::$tra_perdas /home/www/html/sistemas/realize/application/views/cliente/mes_edit.php 50
ERROR - 2020-07-13 15:46:05 --> Severity: Notice --> Undefined property: stdClass::$tra_data /home/www/html/sistemas/realize/application/views/cliente/mes_edit.php 22
ERROR - 2020-07-13 15:46:05 --> Severity: Notice --> Undefined property: stdClass::$tra_tickt /home/www/html/sistemas/realize/application/views/cliente/mes_edit.php 26
ERROR - 2020-07-13 15:46:05 --> Severity: Notice --> Undefined property: stdClass::$tra_ganhos /home/www/html/sistemas/realize/application/views/cliente/mes_edit.php 32
ERROR - 2020-07-13 15:46:05 --> Severity: Notice --> Undefined property: stdClass::$tra_perdas /home/www/html/sistemas/realize/application/views/cliente/mes_edit.php 36
ERROR - 2020-07-13 15:46:12 --> Severity: Notice --> Undefined property: stdClass::$tra_data /home/www/html/sistemas/realize/application/views/cliente/mes_edit.php 22
ERROR - 2020-07-13 15:46:12 --> Severity: Notice --> Undefined property: stdClass::$tra_tickt /home/www/html/sistemas/realize/application/views/cliente/mes_edit.php 26
ERROR - 2020-07-13 15:46:23 --> Severity: Notice --> Undefined property: stdClass::$tra_data /home/www/html/sistemas/realize/application/views/cliente/mes_edit.php 22
ERROR - 2020-07-13 15:46:23 --> Severity: Notice --> Undefined property: stdClass::$tra_tickt /home/www/html/sistemas/realize/application/views/cliente/mes_edit.php 26
ERROR - 2020-07-13 15:49:12 --> Severity: Notice --> Undefined property: stdClass::$ma_capitalInicial /home/www/html/sistemas/realize/application/views/cliente/mes_edit.php 22
ERROR - 2020-07-13 15:49:12 --> Severity: Notice --> Undefined property: stdClass::$ma_metaDIaria /home/www/html/sistemas/realize/application/views/cliente/mes_edit.php 26
ERROR - 2020-07-13 15:51:49 --> Severity: error --> Exception: Call to undefined method Mes_anomodel::getByCliData() /home/www/html/sistemas/realize/application/controllers/Cliente.php 240
ERROR - 2020-07-13 15:58:27 --> Severity: Notice --> Undefined property: stdClass::$ma_capitalInicial /home/www/html/sistemas/realize/application/views/cliente/mes_edit.php 22
ERROR - 2020-07-13 15:58:27 --> Severity: Notice --> Undefined property: stdClass::$ma_metaDIaria /home/www/html/sistemas/realize/application/views/cliente/mes_edit.php 26
ERROR - 2020-07-13 15:59:03 --> Severity: Notice --> Undefined property: stdClass::$ma_metaDIaria /home/www/html/sistemas/realize/application/views/cliente/mes_edit.php 26
ERROR - 2020-07-13 16:01:36 --> Severity: 4096 --> Object of class stdClass could not be converted to string /home/www/html/sistemas/realize/application/controllers/Cliente.php 236
ERROR - 2020-07-13 16:01:36 --> Severity: Notice --> Undefined variable:  /home/www/html/sistemas/realize/application/controllers/Cliente.php 236
ERROR - 2020-07-13 16:01:36 --> Severity: Notice --> Trying to get property 'ma_id' of non-object /home/www/html/sistemas/realize/application/controllers/Cliente.php 236
ERROR - 2020-07-13 16:02:03 --> Severity: 4096 --> Object of class stdClass could not be converted to string /home/www/html/sistemas/realize/application/controllers/Cliente.php 236
ERROR - 2020-07-13 16:02:03 --> Severity: Notice --> Undefined variable:  /home/www/html/sistemas/realize/application/controllers/Cliente.php 236
ERROR - 2020-07-13 16:02:03 --> Severity: Notice --> Trying to get property 'ma_id' of non-object /home/www/html/sistemas/realize/application/controllers/Cliente.php 236
ERROR - 2020-07-13 16:02:17 --> Query error: Data truncated for column 'ma_capitalInicial' at row 1 - Invalid query: UPDATE `mes_ano` SET `ma_capitalInicial` = '200,00', `ma_metaDIaria` = '100,00'
WHERE `ma_id` = '1'
ERROR - 2020-07-13 16:04:24 --> Query error: Data truncated for column 'ma_capitalInicial' at row 1 - Invalid query: UPDATE `mes_ano` SET `ma_capitalInicial` = '200,00', `ma_metaDIaria` = '100,00'
WHERE `ma_id` = '1'
ERROR - 2020-07-13 16:14:14 --> Query error: Unknown column 'ma_mesAno' in 'where clause' - Invalid query: SELECT *
FROM `mes_ano`
WHERE `ma_idCliente` = '1'
AND `ma_mesAno` = '07/2020'
ERROR - 2020-07-13 16:14:34 --> Query error: Unknown column 'ma_mesAno' in 'field list' - Invalid query: INSERT INTO `mes_ano` (`ma_idCliente`, `ma_mesAno`) VALUES ('1', '07/2020')
ERROR - 2020-07-13 16:23:47 --> Severity: error --> Exception: Too few arguments to function Mes_anomodel::getByCliente(), 1 passed in /home/www/html/sistemas/realize/application/controllers/Cliente.php on line 145 and exactly 3 expected /home/www/html/sistemas/realize/application/models/Mes_anomodel.php 88
ERROR - 2020-07-13 16:24:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/www/html/sistemas/realize/application/views/cliente/trades.php 9
ERROR - 2020-07-13 16:25:25 --> Severity: Notice --> Trying to get property 'ma_ano' of non-object /home/www/html/sistemas/realize/application/views/cliente/trades.php 12
ERROR - 2020-07-13 16:25:25 --> Severity: Notice --> Trying to get property 'ma_ano' of non-object /home/www/html/sistemas/realize/application/views/cliente/trades.php 12
ERROR - 2020-07-13 16:32:11 --> 404 Page Not Found: Cliente/trade
ERROR - 2020-07-13 16:41:38 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string /home/www/html/sistemas/realize/application/views/cliente/trades.php 12
ERROR - 2020-07-13 16:41:38 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string /home/www/html/sistemas/realize/application/views/cliente/trades.php 12
ERROR - 2020-07-13 16:41:38 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string /home/www/html/sistemas/realize/application/views/cliente/trades.php 12
ERROR - 2020-07-13 16:41:38 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string /home/www/html/sistemas/realize/application/views/cliente/trades.php 12
ERROR - 2020-07-13 16:41:46 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string /home/www/html/sistemas/realize/application/views/cliente/trades.php 12
ERROR - 2020-07-13 16:41:46 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string /home/www/html/sistemas/realize/application/views/cliente/trades.php 12
ERROR - 2020-07-13 16:41:46 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string /home/www/html/sistemas/realize/application/views/cliente/trades.php 12
ERROR - 2020-07-13 16:41:46 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string /home/www/html/sistemas/realize/application/views/cliente/trades.php 12
ERROR - 2020-07-13 16:43:05 --> Severity: error --> Exception: Call to undefined method Mes_anomodel::getByMesAno() /home/www/html/sistemas/realize/application/controllers/Cliente.php 148
ERROR - 2020-07-13 16:43:16 --> Severity: error --> Exception: Call to undefined method Mes_anomodel::getByMesAno() /home/www/html/sistemas/realize/application/controllers/Cliente.php 148
ERROR - 2020-07-13 16:44:18 --> Severity: Notice --> Undefined property: CI_DB_mysqli_result::$ma_capitalInicial /home/www/html/sistemas/realize/application/views/cliente/trades.php 99
ERROR - 2020-07-13 16:44:33 --> Severity: Notice --> Undefined property: CI_DB_mysqli_result::$ma_capitalInicial /home/www/html/sistemas/realize/application/views/cliente/trades.php 99
ERROR - 2020-07-13 16:44:35 --> Severity: Notice --> Undefined property: CI_DB_mysqli_result::$ma_capitalInicial /home/www/html/sistemas/realize/application/views/cliente/trades.php 99
ERROR - 2020-07-13 16:44:41 --> Severity: Notice --> Undefined property: CI_DB_mysqli_result::$ma_capitalInicial /home/www/html/sistemas/realize/application/views/cliente/trades.php 99
ERROR - 2020-07-13 19:50:34 --> 404 Page Not Found: Site/assets
ERROR - 2020-07-13 19:50:34 --> 404 Page Not Found: Site/assets
ERROR - 2020-07-13 20:31:42 --> 404 Page Not Found: Site/assets
ERROR - 2020-07-13 20:31:42 --> 404 Page Not Found: Site/assets
