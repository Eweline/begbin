<?

//MONTA O ARRAY DE PRODUTOS
$produto[1][CODIGO]     =   "1234";
$produto[1][PRECO]       =   "25,00";
$produto[1][IMAGEM]      =   "cpm22.jpeg";

$produto[2][CODIGO]     =   "5678";
$produto[2][PRECO]       =   "28,00";
$produto[2][IMAGEM]      =   "offspring.jpeg";

?>

<html>
<head>
<title> Carrinho de compras</title>
<!-- <style type="text/css">

body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style></head>
-->
<body>

  <h1>Carrinho de compras</h1>

    <table width="95%"  border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><font face='Arial' size='2'>Confira abaixo, os produtos dispon&iacute;veis no site:</font> </td>
      </tr>
    </table>
    <br><br>    
    
	<form action="carrinho.php" method="post" name="frmcarrinho">
       
	   <table width="90%"  border="0" align="center" cellpadding="0" cellspacing="0">
       <tr>
	   <?
	   //PEGA A CHAVE DO ARRAY
	   $chave = array_keys($produto);
	   
	   //EXIBE OS PRODUTOS
		for($i=0; $i<sizeof($chave); $i++) {
		   $indice    =   $chave[$i];
		   $codigo    =   $produto[$indice][CODIGO];
		   $preco     =   $produto[$indice][PRECO];
		   $imagem    =   $produto[$indice][IMAGEM]; 
         ?>
		   
          <td width="14%"><img src="<? echo $imagem; ?>" width="80" height="80" border="1"></td>
          <td width="36%">
		  
		  <table width="95%"  border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
             <td><font face='Arial' size='2'><? echo $artista; ?></font></td>
          </tr>
          
		  <tr>
             <td><font face='Arial' size='2'><? echo $album; ?></font></td>
          </tr>
          
		  <tr>
             <td><font face='Arial' size='2'>R$ <? echo $preco; ?></font></td>
          </tr>
          
		  <tr>
             <td>
			 <input type="hidden" name="txtprod[<? echo $indice;?>][CODIGO]"  value="<? echo $codigo; ?>">
			 <input type="hidden" name="txtprod[<? echo $indice;?>][ARTISTA]"  value="<? echo $artista; ?>">
			 <input type="hidden" name="txtprod[<? echo $indice;?>][ALBUM]"  value="<? echo $album; ?>">
			 <input type="hidden" name="txtprod[<? echo $indice;?>][PRECO]"  value="<? echo $preco; ?>">
			 <input type="text" name="txtprod[<? echo $indice;?>][QTDE]"  size="2" maxlength="2">	 
             <input type="image" src="carrinho.gif" onClick="javascript: document.forms[0].submit();"></td>
          </tr>
          </table></td>
   	   <?
	   }//FEHA FOR ?>
       </tr>
       </table>
    </form>    
    
	<br></td>
  </tr>
 
</table>
</body>
</html>
