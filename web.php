<?
include "_fun.php";
include "_con.php";
Conecta();
ChecaLogin();
	$FUN_ID = $_SESSION["SESSION_FUN_ID"];
	$query = "SELECT * FROM WEBMAIL WHERE FUN_ID=$FUN_ID";
	$rsF = RetornaSQL($query);
	if(mysql_num_rows($rsF)==0){
        include "_cab.php";
		?>
		<script>
        alerta('Email nao cadastrado','',0,2,null,"volta('primeira.php')");
        </script>
        <?
	}else{
		$rsF = mysql_fetch_array($rsF,MYSQL_ASSOC);
		extract($rsF);
		header('location: webmail/web/index.php?email='.$WEB_EMAIL.'&login='.$WEB_NOME.'&password='.$WEB_SENHA.'&inc_server='.$WEB_POP.'&inc_port='.$WEB_PORT_POP.'&out_server='.$WEB_SMTP.'&out_port='.$WEB_PORT_SMTP.'&EMAILSYS=1'); 
	}
if(){}
?>
