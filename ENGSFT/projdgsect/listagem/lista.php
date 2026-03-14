
<html>
<head>
    <meta chart="utf-8">
    <title>Sistema ZERO BALA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Produtos Radicais</h1>
            <p>Cadastro de produtos</p>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th> ID </th>
                    <th> Nome </th>
                    <th> Descrição </th>
                    <th> Valor </th>
                    <th> Origem </th>
                    <th> Setor </th>
                    <th> Imagem </th>
                    <th> Editar </th>
                    <th> Remover </th>
                </tr>
            </thead>
            
            <tr>                    
                <td> 9 </td>
                <td> Controle Xbox</td>
                <td> Astral Púrpura </td>
                <td> R$ 499,99 </td>
                <td> Osasco </td>
                <td> Games </td>
                <td> Imagem </td>
                <td> 
                    <form>
                        <button type="submit"
                            class="btn btn-default">
                                Editar
                        </button>

                    </form>
                <td> 
                        <form>
                            <button type="submit"
                                class="btn btn-default">
                                    REMOVER
                            </button>

                        </form>
                </td>
            </tr>

        </table>
    </div>
</body>
</html>