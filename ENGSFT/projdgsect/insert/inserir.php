
<html>
<head>
    <meta chart="utf-8">
    <title>Sistema BALA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <!-- Jumbotron -->
        <div class="jumbotron">
            <h1>Produtos Radicais</h1>
            <p>Cadastro de produtos</p>
        </div>
        <!-- Jumbotron -->

        <!-- Aba por navegação -->
        <ul class="nav nav-tab">
            <li class="nav-item">
                <a>
                    Cadastro de produtos
                </a>
            </li>
        </ul>
        <!-- Aba por navegação -->

        <!-- Receber dados do user -->
        <form>

            <!-- INÍCIO Input nome -->
            <div class="form-group">
                <label class="control-label">
                    Nome
                </label>
                <div class="col-sm-4">
                    <input type="text" name="nome" class="form-control" placeholder="Digite o nome do produto">
                </div>
            </div>
            <!-- FINAL Input -->

            <!-- INÍCIO Input desc -->
            <div class="form-group">
                <label class="control-label">
                    Nome
                </label>
                <div class="col-sm-4">
                    <input type="text" name="descricao" class="form-control" placeholder="Digite a descrição">
                </div>
            </div>
            <!-- FINAL Input -->

            <!-- INÍCIO Input valor -->
            <div class="form-group">
                <label class="control-label">
                    Nome
                </label>
                <div class="col-sm-4">
                    <input type="number" name="valor" class="form-control" placeholder="Digite o valor">
                </div>
            </div>
            <!-- FINAL Input -->

            <!-- INÍCIO Input origem -->
            <div class="form-group">
                <label class="control-label">
                    Nome
                </label>
                <div class="col-sm-4">
                    <input type="text" name="origem" class="form-control" placeholder="Digite a origem">
                </div>
            </div>
            <!-- FINAL Input -->

            <!-- INÍCIO Input setor-->
            <div class="form-group">
                <label class="control-label">
                    Nome
                </label>
                <div class="col-sm-4">
                    <select>
                        <option value="1">Games</option>
                        <option value="2">Acessórios</option>
                    </select>
                </div>
            </div>
            <!-- FINAL Input -->

            <!-- INÍCIO Input img-->
            <div class="form-group">
                <label class="control-label">
                    Nome
                </label>
                <div class="col-sm-4">
                    <input type="file" name="imagem" class="file-style" placeholder="Digite">
                </div>
            </div>
            <!-- FINAL Input -->
            
        </form>
        <!-- Receber dados do user -->

    </div>
</body>
</html>