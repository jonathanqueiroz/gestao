<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4' class="hover">
    <thead>
    <tr>
        <td><strong>Nome</strong></td>
        <td><strong>Email</strong></td>
        <td><strong>Telefone</strong></td>
        <td><strong>Data de Nascimento</strong></td>
        <td><strong>Endereço</strong></td>
        <td><strong>Opções</strong></td>
    </tr>
    </thead>
    <tbody>
<?php foreach ($pessoas as $pessoa_item): ?>
        <tr>
            <td><?php echo $pessoa_item['nome']; ?></td>
            <td><?php echo $pessoa_item['email']; ?></td>
            <td><?php echo $pessoa_item['telefone']; ?></td>
            <td><?php $data = date_create($pessoa_item['data_nascimento']); echo date_format($data,"d/m/Y"); ?></td>
            <td><?php echo $pessoa_item['endereco']; ?></td>
            <td>
                <a href="<?php echo base_url('pessoa/view/'.$pessoa_item['id_pessoa']); ?>">Visualizar</a> | 
                <a href="<?php echo site_url('pessoa/edit/'.$pessoa_item['id_pessoa']); ?>">Editar</a> | 
                <a href="<?php echo site_url('pessoa/delete/'.$pessoa_item['id_pessoa']); ?>" onClick="return confirm('Tem certeza que deseja apagar o usúario?')">Apagar</a>
            </td>
        </tr>
<?php endforeach; ?>
    </tbody>
</table>