<?php
/*
@Author : alfianokt (AOS Channel)
@Notes  : Bebas mau edit :*
*/
echo "══════[ Simple CLI login ]═══════\n\n";
$pass = "kimihime"; //Password Kamu
while(1){ //Untuk melakukan perulangan hingga password benar
echo "Enter Password : ";
$val = trim(fgets(STDIN));
if($val == $pass){
		echo "succes login\n"; //Kode jika berhasil masuk
		break; //untuk menghentikan perulangan while
	}else{
		echo "failed to login\n"; //Kode Jika gagal masuk
	}
}
?>