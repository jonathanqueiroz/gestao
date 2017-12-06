<div class="row">
	<h4 style="text-align: center;">Adolescentes</h4>
	<div class="col s10 l9 push-l1">
		<ul class="collapsible" data-collapsible="accordion">
			<?php foreach ($adolescentes as $adolescente) { ?>
		  		<li>
				    <div class="collapsible-header">
				     	<?php echo $adolescente['nome']; ?> 
				    </div>
		    		<div class="collapsible-body grey lighten-5">
		    		<div class="row">
			    		<div class="col s6"><p>RG: <?php echo $adolescente['rg']; ?><br>
			    		Data de Nascimento: <?php echo $adolescente['nascimento']; ?><br>
			    		Telefone: <?php echo $adolescente['telefone']; ?><br>
			    		Mãe: <?php echo $adolescente['filiacao_mae']; ?><br>
			    		Pai: <?php echo $adolescente['filiacao_pai']; ?></p></div>
			    		<div class="col s6">
			    		<p>
			    		<a href="<?php echo base_url('Pessoa/edit_dados_adolescente/'.$adolescente['id_pessoa']);?>">Atualizar Status</a><br>
			    		<a href="<?php echo base_url('Pessoa/edit_dados_adolescente/'.$adolescente['id_pessoa']);?>">Editar Informações</a><br>
			    		</div>
		    		</div>
		  		</li>
			<?php } ?>
		</ul>
	</div>
</div>
