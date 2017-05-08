#!/usr/bin/php -q
<?php
/*
* -> Codado por Fyk1ll
* Encrypter e Decrypter de rot13
*/
	error_reporting(0);
	set_time_limit(0);
	
	function banner(){
		echo "\033[32m
		    ____  _           _____          
		   / __ \(_)___  ___ / ___/___  _____
		  / /_/ / /_  / / _ \\__ \/ _ \/ ___/
		 / _, _/ / / /_/  __/__/ /  __/ /__  
		/_/ |_/_/ /___/\___/____/\___/\___/\033[1;m
					\033[37mHacker Team\033[1;m											   
		\n";
		}
	function help(){
		echo "\033[32m
		    ____  _           _____          
		   / __ \(_)___  ___ / ___/___  _____
		  / /_/ / /_  / / _ \\__ \/ _ \/ ___/
		 / _, _/ / / /_/  __/__/ /  __/ /__  
		/_/ |_/_/ /___/\___/____/\___/\___/\033[1;m
					Codado por Fyk1ll
		
		-r => Usado para codificar
		-d => Decodificar
															                        
		\n";
		exit();
		}
	if(isset($argv[1]) == ""){
			help();
		}
	banner();
	if($argv[1] == "-r"){
			$encrypt = "$argv[2] $argv[3] $argv[4] $argv[5] $argv[6] $argv[7]";
			$res = str_rot13($encrypt);
			echo "\033[36m[===================================================================================]\033[1;m\n";
			echo "!\t\t\tEncrypt: $res\tPalavra:$encrypt\t\t    !\n";
			echo "\033[36m[===================================================================================]\033[1;m\n";
		}
	if($argv[1] == "-d"){
			$decrypt  = "$argv[2] $argv[3] $argv[4] $argv[5] $argv[6] $argv[7]";
			$resp = str_rot13($decrypt);
			echo "\033[36m[===================================================================================]\033[1;m\n";
			echo "\t\tDecrypt: $resp\tEncrypt:$decrypt\n";
			echo "\033[36m[===================================================================================]\033[1;m\n";
		}
?>

