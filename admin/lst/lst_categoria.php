
	<h1>Lista de categoria</h1>
	<div class="base-lista">
		<div class="cx-lista">
		<form action="index.php" method="get" name="buscausuario" id="buscausuario">
		  <table border="0">
			<tbody>
			  <tr>
				<th width="16%"><strong>Buscar:</strong></th>
				<th width="60%"><input type="text" name="pesq" value=""/></th>
				<th>
				<select name="campo">
				   
				  <option value="categoria">Categoria</option>           
				  <option value="ativo_categoria">Ativo (S ou N)</option>  
				   
				</select></th>
					<input type="hidden" name="link" value="2"  />
				<th><input type="submit" name="Submit" value="" class="but" /></th>
			  </tr>
			</tbody>
		  </table>
		</form>


		<h2>Lista de Capítulo</h2>
		<a href="index.php?link=3">Cadastrar Capítulo </a>
		<p class="limpar">&nbsp;</p>
		
		
		<table width="100%" border="0" cellpadding="2" cellspacing="2">
		<tbody>
			<tr>
			  <td align="center" class="tdbc">id</td>
			  <td align="center" class="tdbc">Título do Curso</td>
			  <td align="left" class="tdbc">Ativo</td>
			   <td align="center" colspan="2" class="tdbc">Ação</td>
			</tr>

		  <tr >
					  <td class="coluna1" align="center">1</td>
					  <td class="coluna1"  >Smartphone</td>
					  <td  class="coluna1" align="left">s</td>
					  <td class="coluna1" align="center"><a href="">Editar</a></td>
					  <td class="coluna1" align="center"><a href="" class="excluir">Excluir</a></td>			
		</tr> 
		  <tr >
					  <td class="coluna2" align="center">2</td>
					  <td class="coluna2"  >Smartphone</td>
					  <td  class="coluna2" align="left">s</td>
					  <td class="coluna2" align="center"><a href="">Editar</a></td>
					  <td class="coluna2" align="center"><a href="" class="excluir">Excluir</a></td>			
		</tr> 
		  <tr >
					  <td class="coluna1" align="center">3</td>
					  <td class="coluna1"  >Smartphone</td>
					  <td  class="coluna1" align="left">s</td>
					  <td class="coluna1" align="center"><a href="">Editar</a></td>
					  <td class="coluna1" align="center"><a href="" class="excluir">Excluir</a></td>			
		</tr> 
		  <tr >
					  <td class="coluna2" align="center">4</td>
					  <td class="coluna2"  >Smartphone</td>
					  <td  class="coluna2" align="left">s</td>
					  <td class="coluna2" align="center"><a href="">Editar</a></td>
					  <td class="coluna2" align="center"><a href="" class="excluir">Excluir</a></td>			
		</tr> 	
				
            	
            </tbody>
            </table>
		
		<div class="cx-paginacao">
			<p></p><p></p><div><p>Página 1 de 2</p><br>
			<a href="index.php?link=2&amp;ordem=1">Próxima</a> | 
			<a href="index.php?link=2&amp;ordem=1">Última</a></div><p></p>
		</div>

		<p>&nbsp;</p>
		<p>&nbsp;</p>

	</div>
	</div>