<?php require 'mestre/topo.php';?>
<div id="content">

<div class="box">
	<div class="bg">
		<div class="extra-bg">
			<div class="inner">
				<div class="img-indent">
					<img alt="" src="<?php echo IMG_URL . 'contato.jpg'?>"/>
					<h1>Fale Conosco</h1>
					<h3>Utilize este Formulário para nos enviar uma Mensagem.</h3>
				</div>
			</div>
		</div>
	</div>
</div>

	<div class="indent">
		<h2>Formulário de Contato</h2>
		<form id="contacts-form" action="<?php echo BASE_URL . 'controle/contato/incluir.php';?>" method="post">
			<fieldset>
				<div class="field">
					<label>Nome:</label>
				<input id="nome" name="nome" type="text" value=""/>
				</div>	
				<div class="field">
					<label>Telefone:</label>
				<input id="telefone" name="telefone" type="tel" value=""/>
				</div>	
				<div class="field">
					<label>E-mail:</label>
					<input id="email" name="email" type="text" value=""/>
				</div>
	
				<div class="field">
					<label>Mensagem:</label>
					<textarea id="mensagem" name="mensagem" cols="1" rows="1"></textarea>
				</div>
	
				<div class="alignright">
					<a href="#" onclick="document.getElementById('contacts-form').submit()" class="link">Enviar Mensagem</a>
				</div>
			 </fieldset>
		 </form>
</div>

<?php require 'mestre/rodape.php';?>
