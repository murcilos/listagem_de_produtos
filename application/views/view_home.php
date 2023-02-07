<div class="miolo">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Produtos</h1>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">descrição</th></th>
                        <th scope="col">preço</th>
                        <th scope="col">quantidade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($produtos as $key ) {
                            echo '
                            <tr>
                                <th scope="row">'.$key->id.'</th>
                                <td>'.$key->descricao.'</td>
                                <td>'.$key->preco. '</td>
                                <td>'.$key->qtde.'</td>
                            </tr>';
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>