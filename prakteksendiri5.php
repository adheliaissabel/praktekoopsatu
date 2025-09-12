<?php
class akun
{
  var $email;
  var $username;
  var $password;

}

$akun1 = new akun();
$akun2 = new akun();

$akun1->username = "adheliaissabel";
$akun1->email = "adheliaissabel@gmail.com";
$akun1->password = "akun123";

$akun2->username ="alexsaissabel";
$akun2->email = "alexsaissabel@gmail.com";
$akun2->password = "akun234";

echo $akun1->email;
echo "\n";
echo $akun1->username;
echo "\n";
echo $akun1->password;
echo "\n";
echo "\n";

echo $akun2->email;
echo "\n";
echo $akun2->username;
echo "\n";
echo $akun2->password;
echo "\n";

?>