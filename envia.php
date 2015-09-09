<?php 

$para=0;
if((!isset($_POST['email']))||(!isset($_POST['nome']))){
$para=1;
$nome="";
$email="";
}

if(isset($_POST['email']))
$email=$_POST['email'];

if(isset($_POST['nome']))
$nome=$_POST['nome'];


if(isset($_POST['html']))
$html=$_POST['html'];
else
$html=-1;

if(isset($_POST['css']))
$css=$_POST['css'];
else
$css=-1;

if(isset($_POST['javascript']))
$javascript=$_POST['javascript'];
else
$javascript=-1;

if(isset($_POST['python']))
$python=$_POST['python'];
else
$python=-1;

if(isset($_POST['django']))
$django=$_POST['django'];
else
$django=-1;

if(isset($_POST['ios']))
$ios=$_POST['ios'];
else
$ios=-1;

if(isset($_POST['android']))
$android=$_POST['android'];
else
$android=-1;

?>
<?php 
$qualemailenviar=0;

if(($html>=7)&&($css>=7)&&($javascript>=7)){
	$qualemailenviar=1;
			$assunto="Obrigado por se candidatar";
			$mensagem = ' <P style="font-size:26px;">Obrigado por se candidatar '.$nome.' , assim que tivermos uma vaga disponível
			para programador Front-End entraremos em contato.';
			
			$headers = "MIME-Version: 1.1\r\n";
			$headers .= "Content-type: text/html; charset=utf-8\r\n";
			
			if(mail($email,$assunto,$mensagem,$headers)){?> 
							<script language="javascript" type="text/javascript">
                            window.alert("Mensagem enviada com sucesso");
							window.history.go(-1); 
                   			</script>
			<?php }else{?> 
							<script language="javascript" type="text/javascript">
                            window.alert("Mensagem enviada com sucesso");
							window.history.go(-1); 
                   			</script>
			     <?php }
	}
	
if(($python>=7)&&($django>=7)){
	$qualemailenviar=1;
 			$assunto="Obrigado por se candidatar";
       		$mensagem = ' <P style="font-size:26px;">Obrigado por se candidatar '.$nome.', assim que tivermos uma vaga disponível
			para programador Back-End entraremos em contato.';
			
			$headers = "MIME-Version: 1.1\r\n";
			$headers .= "Content-type: text/html; charset=utf-8\r\n";
			
			if(mail($email,$assunto,$mensagem,$headers)){?> 
							<script language="javascript" type="text/javascript">
                            window.alert("Mensagem enviada com sucesso");
							window.history.go(-1); 
                   			</script>
			<?php }else{?> 
							<script language="javascript" type="text/javascript">
                            window.alert("Mensagem enviada com sucesso");
							window.history.go(-1); 
                   			</script>
			     <?php }
	}	

if(($ios>=7)||($android>=7)){
 	$qualemailenviar=1;
	        $assunto="Obrigado por se candidatar";
       		$mensagem = ' <P style="font-size:26px;">Obrigado por se candidatar '.$nome.', assim que tivermos uma vaga disponível
			para programador Mobile entraremos em contato.';
			
			$headers = "MIME-Version: 1.1\r\n";
			$headers .= "Content-type: text/html; charset=utf-8\r\n";
			
			if(mail($email,$assunto,$mensagem,$headers)){?> 
							<script language="javascript" type="text/javascript">
                            window.alert("Mensagem enviada com sucesso");
							window.history.go(-1); 
                   			</script>
			<?php }else{?> 
							<script language="javascript" type="text/javascript">
                            window.alert("Mensagem enviada com sucesso");
							window.history.go(-1); 
                   			</script>
			     <?php }
	}


 if (($qualemailenviar==0)&&($para==0)){
			$assunto="Obrigado por se candidatar";
			$mensagem = ' <P style="font-size:26px;">Obrigado por se candidatar '.$nome.', assim que tivermos uma vaga disponível
			para programador entraremos em contato.';
			
			$headers = "MIME-Version: 1.1\r\n";
			$headers .= "Content-type: text/html; charset=utf-8\r\n";
			
			if(mail($email,$assunto,$mensagem,$headers)){?> 
							<script language="javascript" type="text/javascript">
                            window.alert("Mensagem enviada com sucesso");
							window.history.go(-1); 
                   			</script>
			<?php }else{?> 
							<script language="javascript" type="text/javascript">
                            window.alert("Mensagem enviada com sucesso");
							window.history.go(-1); 
                   			</script>
			     <?php }	
	}
?>

<meta http-equiv="refresh" content="0; url=index.php"> 








