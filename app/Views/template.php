<!DOCTYPE html> <!-- declara o tipo de documento -->
<html> <!-- tag principal do html -->
    <head> <!-- tag do cabeçalho de metadados -->
        <title>Livros</title>  <!-- título da página -->
        <meta charset="utf-8"> <!-- permite caracteres em português -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  <!-- configuração para visualização em smartphone -->

        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"> <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"> <!-- Bootstrap ICONS -->
        <link rel="stylesheet" href="<?=base_url('/css/style.css')?>"> <!-- estilos do site -->
    </head>
    <body>
        <header class="bg-light p-4">
            <h1>Livros</h1>
        </header>
        <main class="py-4">
            <div class="container">
                <!-- INÍCIO PARTE DINÂMICA -->
                
                <?= $this->renderSection('conteudo') ?> <!-- Área que será substituída dinamicamente -->

                <!-- FIM PARTE DINÂMICA -->
            </div>
        </main>
        <footer class="pt-2 pb-5 bg-dark text-light text-center">
            ©<?=date('Y')?> Livros - Todos os direitos reservados.
            
            <!-- scripts -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script> <!-- script bootstrap -->
        </footer>
    </body>
</html>