<?= $this->extend('template') ?>
<?= $this->section('conteudo') ?>


<?php if (session()->has('mensagem')): ?>
    <div class="alert alert-danger">
        <?= session('mensagem') ?>
    </div>
<?php endif; ?>

<h1>Lista de livros</h1>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>Livro</th>
            <th>Autor</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($livros as $livro){ if(!isset($livro)) continue; ?>
        <tr>
            <td><?=$livro['titulo']?></td>
            <td><?=$livro['autor']?></td>
            <td>
                <a href="<?=base_url('/deletar/'.$livro['id'])?>">
                    <i class="bi bi-trash3-fill"></i>
                </a>
            </td>
        </tr>
        <?php } // fim foreach ?>
    </tbody>
</table>
    
<?= $this->endSection() ?>
