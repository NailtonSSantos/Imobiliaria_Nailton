<?php 
	require '../mestre/topo_adm.php';
	require '../../controle/contato/listar.php';
	
	$listaContatos = listarContatos();
?>

<!-- content -->
<div id="content">
	<div class="indent">
		<h2 class="titulo_adm">Mensagem de Contato</h2>
		<ul class="img-list-alt">
			<?php 
				if (is_array($listaContatos)){
					$count = 0;
					foreach ($listaContatos as $contato){
						$count+= 1;
			?>
			<li class="<?php ($count % 2) ? print 'pintarLinhaImpar' : print 'pintarLinhaPar'; ?>">
				<h3><?php echo $contato->getNome();?></h3>
				<a href="javascript:Excluir(<?php echo $contato->getId();?>)">
					<img alt="Excluir Contato" class="botao_excluir" width="40"
					height="40" src="<?php echo BASE_URL . 'recursos/imagens/excluir.png'?>">
				</a>
				<?php echo $contato->getEmail(); ?> <br /><br />
				<?php echo $contato->getMensagem(); ?> 
				</li>
				<?php }}else{ ?>
				<li class="<?php echo 'pintaLinhaImpar'; ?>">
					<h3><?php  echo $listaContatos; ?></h3>
				</li>
				<?php }?>
			</ul>
		</div>
	</div>
	
<?php require '../mestre/rodape.php'; ?>