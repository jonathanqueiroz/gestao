<h2><?php echo $title; ?></h2>
 
<table cellpadding='4' class="scroll">
    <thead>
    <tr>
        <td><strong>Titulo</strong></td>
        <td><strong>Orientador</strong></td>
        <td><strong>Descrição</strong></td>
        <td><strong>Departamento</strong></td>
        <td><strong>Modalidade</strong></td>
        <td><strong>Público Alvo</strong></td>
        <td><strong>Justificativa</strong></td>
        <td><strong>Objetivos</strong></td>
        <td><strong>Metodologia</strong></td>
        <td><strong>Cronograma</strong></td>
        <td><strong>Opções</strong></td>
    </tr>
    </thead>
    <tbody>
<?php foreach ($projetos as $projeto_item): ?>
        <tr>
            <td><?php echo $projeto_item['titulo']; ?></td>
            <td><?php echo $projeto_item['orientador']; ?></td>
            <td><?php echo $projeto_item['descricao']; ?></td>
            <td><?php echo $projeto_item['departamento']; ?></td>
            <td><?php echo $projeto_item['modalidade']; ?></td>
            <td><?php echo $projeto_item['publico_alvo']; ?></td>
            <td><?php echo $projeto_item['justificativa']; ?></td>
            <td><?php echo $projeto_item['objetivos']; ?></td>
            <td><?php echo $projeto_item['metodologia']; ?></td>
            <td><a href="<?php echo base_url('/uploads/'.$projeto_item['cronograma']); ?>">Arquivo</td>
            <td>
                <a href="<?php echo base_url('projeto/view/'.$projeto_item['id_projeto']); ?>">Visualizar</a> | 
                <a href="<?php echo site_url('projeto/edit/'.$projeto_item['id_projeto']); ?>">Editar</a> | 
                <a href="<?php echo site_url('projeto/delete/'.$projeto_item['id_projeto']); ?>" onClick="return confirm('Tem certeza que deseja apagar o usúario?')">Apagar</a>
            </td>
        </tr>
<?php endforeach; ?>
</tbody>
</table>