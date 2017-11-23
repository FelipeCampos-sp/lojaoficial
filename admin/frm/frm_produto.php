<h1>CADASTRO DE produtoS</h1>
		<div class="cx-form">
		<div class="cx-pd">		

<form action="op/op_produto.php" method="post">
		
<label class="esq">
	<strong>Categoria</strong>
    <select name="txt_id_categoria">
	<option value=1  > Smartphone</option><option value=2  > Tablet</option><option value=3  > Hardware</option><option value=4  > Periféricos</option><option value=5  > Computadores</option><option value=6  > Câmeras Digitais</option><option value=7  > Gamer</option>         
      </select>
  </label>
 
<label class="dir">
	<strong>Subategoria</strong>
    <select name="txt_id_subcategoria">
	<option value=1  > Samsung</option><option value=2  > Motorola </option><option value=3  > LG</option><option value=4  > Alcatel </option><option value=5  > Quantum</option><option value=6  > Microsoft </option><option value=7  > Asus </option><option value=8  > Multilaser</option><option value=9  > Sony</option><option value=10  > Positivo </option><option value=11  > Nokia </option><option value=12  > Apple </option><option value=13  > Lenovo</option><option value=14  > Apple iPad</option><option value=15  > Kindle </option><option value=16  > Lenovo </option><option value=17  > Samsung </option><option value=18  > Gradiente </option><option value=19  > Positivo </option><option value=20  > ASUS </option><option value=21  > Acer </option><option value=22  > Multilaser</option><option value=23  > DL</option><option value=24  > Placas de Som </option><option value=25  > Processadores </option><option value=26  > Placas-mãe </option><option value=27  > Placa de vídeo (VGA)</option><option value=28  > Placas TV & Edição </option><option value=29  > Modem (</option><option value=30  > Memória RAM </option><option value=31  > Fontes </option><option value=32  > Drives </option><option value=33  > Disco Rígido (HD) </option><option value=34  > Coolers </option><option value=35  > Pen Drive </option><option value=36  > Gabinetes </option><option value=37  > Suprimentos </option><option value=38  > WebCam </option><option value=39  > Som & Acessórios</option><option value=40  > Teclado & Mouse</option><option value=41  > Mesa Digitalizadora</option><option value=42  > Computadores </option><option value=43  > Servidores </option><option value=44  > Scanners </option><option value=45  > Impressoras </option><option value=46  > Monitores </option><option value=47  > Notebooks / Ultrabooks</option><option value=48  > Câmeras Digitais </option><option value=49  > Cartões de memória</option><option value=50  > Filmadoras </option><option value=51  > Playstation 3</option><option value=52  > Playstation 2</option><option value=53  > Nintendo DSI </option><option value=54  > Nintendo Wii </option><option value=55  > Playstation 4</option><option value=56  > Xbox ONE </option><option value=57  > Xbox 360 </option><option value=58  > Geek </option><option value=59  > ZenFone</option><option value=60  > Joystick</option><option value=61  > Cadeira Gamer</option>         
      </select>
  </label>
 
<label class="esq">
	<strong>Fabricante</strong>
    <select name="txt_id_fabricante">
	<option value=7  > LG</option><option value=7  > Motorola</option><option value=7  > Apple</option><option value=7  > Sony</option><option value=7  > Asus</option><option value=7  > Intel</option><option value=7  > Samsumg</option><option value=7  > Multilaser</option><option value=7  > Seagate</option><option value=7  > Gigabyte</option><option value=7  > AverMedia</option><option value=7  > Dazz</option><option value=7  > Konami</option><option value=7  > DT3</option><option value=7  > Logitech</option><option value=7  > Lenovo</option><option value=7  > Epson</option><option value=7  > Sony</option><option value=7  > Nikon</option><option value=7  > Canon</option><option value=7  > Coolpix</option><option value=7  > Kindle</option><option value=7  > Positivo</option><option value=7  > Genius</option>         
      </select>
  </label>
   <label class="dir">
	<strong>Ativo</strong>
	<select name="txt_ativo" class="tm3">
		<option value="S" >Sim</option>
		<option value="N" >Não</option>
	</select>
</label> 

	
  <label>
	<strong>Título do produto</strong>
    <input type="text" name="txt_titulo_produto" id="txt_titulo_produto" value="" size="109"/>
  </label>
  
   <label>
	<strong>Buscar imagem</strong>
    <input type="file" name="txt_imagem" id="txt_imagem" value="" size="109"/>
  </label>
  
   <label>
	<strong>Imagem</strong>
    <input type="text" name="txt_imagem_produto" id="txt_imagem_produto" value="" size="109"/>
  </label>
  <label class="esq">
	<strong>Preço anterior</strong>
    <input type="text" name="txt_preco_alto" id="txt_preco_alto" value="" size="109" />
  </label>
   <label class="dir">
	<strong>Valor atual</strong>
    <input type="text" name="txt_valor_produto" id="txt_valor_produto" value="" size="109" />
  </label>  

	
<label>
        <strong>Descrição</strong>
        <textarea  name="txt_descricao_produto" id="txt_descricao_produto"  class="ckeditor" rows="15" cols="70">   </textarea>
</label>

<label>
        <strong>Detalhes</strong>
        <textarea  name="txt_detalhes_produto" id="txt_detalhes_produto"  class="ckeditor" rows="15" cols="70">   </textarea>
</label>

	
		<label>
		<div  class="cx-but">
			<input type="hidden" name ="id" value="">							
			<input type="hidden" name ="acao" value="Cadastrar">										
			<input type="submit" name= "logar" id="logar" value = "Cadastrar" class="but" >		
		</div>				
		</label>
</form>

		</div>
		</div>