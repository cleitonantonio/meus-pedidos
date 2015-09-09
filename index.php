<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" media="screen"/>
<link href='img/icone.png' rel='icon' type='image/vnd.microsoft.icon'/>

<script language="javascript" type="text/javascript">
function validaForm(){
	
           d = document.formContato;
            var nome=(d.nome.value);
			var email=(d.email.value);
			
           if (nome==""){
			    d.nomeresp.value="Campo Nome não pode ser vazio";
                d.nome.style.backgroundColor="#ddd";
                d.nome.focus();
				return false;
			}else
				 d.nomeresp.value="";	
			if (email==""){
			    d.emailresp.value="Campo Email não pode ser vazio";
                d.email.style.backgroundColor="#ddd";
                d.email.focus();
				return false;
			}else
				 d.emailresp.value="";				  		
	}
 </script>

<title>Meus pedidos</title>
</head>
<body>
<div class="centro">
	<div class="cabecalho"><img alt="Meus Pedidos" src="img/cabecalho.png"></div>
            <form action="envia.php" method="post" name="formContato">
                    <span>Nome</span> <input name="nome" class="nome"  type="text"><br>
                    <input name="nomeresp" class="nome-resp" readonly="readonly"><br>

                    <span>Email</span> <input name="email" class="email"  type="email"><br>
                    <input name="emailresp" class="email-resp" readonly="readonly"><br>

                    <div class="titulo"> Responda as questões a seguir de acordo com o seu nível de conhecimento.<br>
                    As respostas serão utilizadas no processo de seleção.</div><br>
                    <div class="claro">
                    HTML: <br>
                     <input type="radio" name="html"  class="opcoes" value="0"/>0 
                     <input type="radio" name="html" class="opcoes"value="1"/>1
                     <input type="radio" name="html" class="opcoes" value="2"/>2
                     <input type="radio" name="html" class="opcoes" value="3"/>3
                     <input type="radio" name="html" class="opcoes" value="4"/>4
                     <input type="radio" name="html" class="opcoes" value="5"/>5
                     <input type="radio" name="html" class="opcoes" value="6"/>6
                     <input type="radio" name="html" class="opcoes" value="7"/>7
                     <input type="radio" name="html" class="opcoes" value="8"/>8
                     <input type="radio" name="html" class="opcoes" value="9"/>9
                     <input type="radio" name="html" class="opcoes" value="10"/>10<br><br>
                    </div> 
                    <div class="escuro">
                     CSS: <br>
                     <input type="radio" name="css" class="opcoes" value="0"/>0 
                     <input type="radio" name="css" class="opcoes"value="1"/>1
                     <input type="radio" name="css" class="opcoes" value="2"/>2
                     <input type="radio" name="css" class="opcoes" value="3"/>3
                     <input type="radio" name="css" class="opcoes" value="4"/>4
                     <input type="radio" name="css" class="opcoes" value="5"/>5
                     <input type="radio" name="css" class="opcoes" value="6"/>6
                     <input type="radio" name="css" class="opcoes" value="7"/>7
                     <input type="radio" name="css" class="opcoes" value="8"/>8
                     <input type="radio" name="css" class="opcoes" value="9"/>9
                     <input type="radio" name="css" class="opcoes" value="10"/>10<br><br>
                     </div>
                   <div class="claro">   Javascript: <br>
                     <input type="radio" name="javascript" class="opcoes" value="0"/>0 
                     <input type="radio" name="javascript" class="opcoes"value="1"/>1
                     <input type="radio" name="javascript" class="opcoes" value="2"/>2
                     <input type="radio" name="javascript" class="opcoes" value="3"/>3
                     <input type="radio" name="javascript" class="opcoes" value="4"/>4
                     <input type="radio" name="javascript" class="opcoes" value="5"/>5
                     <input type="radio" name="javascript" class="opcoes" value="6"/>6
                     <input type="radio" name="javascript" class="opcoes" value="7"/>7
                     <input type="radio" name="javascript" class="opcoes" value="8"/>8
                     <input type="radio" name="javascript" class="opcoes" value="9"/>9
                     <input type="radio" name="javascript" class="opcoes" value="10"/>10<br><br>
                     </div>
                   <div class="escuro">   Python: <br>
                     <input type="radio" name="python" class="opcoes" value="0"/>0 
                     <input type="radio" name="python" class="opcoes"value="1"/>1
                     <input type="radio" name="python" class="opcoes" value="2"/>2
                     <input type="radio" name="python" class="opcoes" value="3"/>3
                     <input type="radio" name="python" class="opcoes" value="4"/>4
                     <input type="radio" name="python" class="opcoes" value="5"/>5
                     <input type="radio" name="python" class="opcoes" value="6"/>6
                     <input type="radio" name="python" class="opcoes" value="7"/>7
                     <input type="radio" name="python" class="opcoes" value="8"/>8
                     <input type="radio" name="python" class="opcoes" value="9"/>9
                     <input type="radio" name="python" class="opcoes" value="10"/>10<br><br>
                     </div>
                   <div class="claro">  Django: <br>
                     <input type="radio" name="django" class="opcoes" value="0"/>0 
                     <input type="radio" name="django" class="opcoes"value="1"/>1
                     <input type="radio" name="django" class="opcoes" value="2"/>2
                     <input type="radio" name="django" class="opcoes" value="3"/>3
                     <input type="radio" name="django" class="opcoes" value="4"/>4
                     <input type="radio" name="django" class="opcoes" value="5"/>5
                     <input type="radio" name="django" class="opcoes" value="6"/>6
                     <input type="radio" name="django" class="opcoes" value="7"/>7
                     <input type="radio" name="django" class="opcoes" value="8"/>8
                     <input type="radio" name="django" class="opcoes" value="9"/>9
                     <input type="radio" name="django" class="opcoes" value="10"/>10<br><br>
                     </div>
                    <div class="escuro"> Desenvolvimento iOs: <br>
                     <input type="radio" name="ios" class="opcoes" value="0"/>0 
                     <input type="radio" name="ios" class="opcoes"value="1"/>1
                     <input type="radio" name="ios" class="opcoes" value="2"/>2
                     <input type="radio" name="ios" class="opcoes" value="3"/>3
                     <input type="radio" name="ios" class="opcoes" value="4"/>4
                     <input type="radio" name="ios" class="opcoes" value="5"/>5
                     <input type="radio" name="ios" class="opcoes" value="6"/>6
                     <input type="radio" name="ios" class="opcoes" value="7"/>7
                     <input type="radio" name="ios" class="opcoes" value="8"/>8
                     <input type="radio" name="ios" class="opcoes" value="9"/>9
                     <input type="radio" name="ios" class="opcoes" value="10"/>10<br><br>
                     </div>
                   <div class="claro">   Desenvolvimento Android: <br>
                     <input type="radio" name="android" class="opcoes" value="0"/>0 
                     <input type="radio" name="android" class="opcoes"value="1"/>1
                     <input type="radio" name="android" class="opcoes" value="2"/>2
                     <input type="radio" name="android" class="opcoes" value="3"/>3
                     <input type="radio" name="android" class="opcoes" value="4"/>4
                     <input type="radio" name="android" class="opcoes" value="5"/>5
                     <input type="radio" name="android" class="opcoes" value="6"/>6
                     <input type="radio" name="android" class="opcoes" value="7"/>7
                     <input type="radio" name="android" class="opcoes" value="8"/>8
                     <input type="radio" name="android" class="opcoes" value="9"/>9
                     <input type="radio" name="android" class="opcoes" value="10"/>10
                     </div>
                     <input type="submit" class="cadastrar"  onclick="return validaForm()" value="Cadastrar"/>   
             </form>    
             
<div class="rodape"></div>                
</div>

</body>
</html>
