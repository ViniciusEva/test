<?php

// Inclua o arquivo de conexão com o banco de dados (substitua com seus dados)
// include 'conexao.php';

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Sanitiza e obtém os dados do formulário
    $nome = htmlspecialchars(trim($_POST['nome']));
    $preco = filter_var($_POST['preco'], FILTER_VALIDATE_FLOAT);
    $custo = filter_var($_POST['custo'], FILTER_VALIDATE_FLOAT);
    $valor_total = filter_var($_POST['valor_total'], FILTER_VALIDATE_FLOAT);
    $descricao = htmlspecialchars(trim($_POST['descricao']));
    $categoria = htmlspecialchars(trim($_POST['categoria']));
    $tipo = htmlspecialchars(trim($_POST['tipo']));
    $validade = htmlspecialchars(trim($_POST['validade']));
    $marca = htmlspecialchars(trim($_POST['marca']));
    $local_armazenamento = htmlspecialchars(trim($_POST['local_armazenamento']));
    $quantidade = filter_var($_POST['quantidade'], FILTER_VALIDATE_INT);
    $product_name = htmlspecialchars(trim($_POST['product_name']));
    $product_brand_model = htmlspecialchars(trim($_POST['product_brand_model']));
    $product_model_id = htmlspecialchars(trim($_POST['product_model_id']));
    $product_fabrication_year = filter_var($_POST['product_fabrication_year'], FILTER_VALIDATE_INT);
    $purchase_date = htmlspecialchars(trim($_POST['purchase_date']));

    // Validação básica dos dados
    //if (empty($nome) || $preco === false || $custo === false || $valor_total === false || $quantidade === false) {
        // Redireciona de volta com uma mensagem de erro
        //header("Location: cadastro.html?erro=preencha_campos_obrigatorios");
        //exit();
    //}

    // Exemplo de como você faria a inserção no banco de dados (usando PDO como exemplo)
    //try {
        // $stmt = $pdo->prepare("INSERT INTO produtos (nome, preco, custo, valor_total, descricao, categoria, tipo, validade, marca, local_armazenamento, quantidade, product_name, product_brand_model, product_model_id, product_fabrication_year, purchase_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        // $stmt->execute([$nome, $preco, $custo, $valor_total, $descricao, $categoria, $tipo, $validade, $marca, $local_armazenamento, $quantidade, $product_name, $product_brand_model, $product_model_id, $product_fabrication_year, $purchase_date]);

        // Simulação de sucesso
        //echo "Produto cadastrado com sucesso!";

        // Redireciona para uma página de sucesso
        // header("Location: sucesso.html");
        // exit();

    //} catch (PDOException $e) {
        // Em caso de erro, redireciona com mensagem
        // header("Location: cadastro.html?erro=database_error");
        // exit();
        //echo "Erro ao cadastrar: " . $e->getMessage();
    //}

//} else {
    // Se a página for acessada diretamente sem POST, redireciona para o formulário
    //header("Location: cadastro.html");
    //exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="../cadastro_produto/style_cadastr.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../style_navbar.css">
</head>
<body>

    
    <div class="dashboard-container">
        <?php include "../navbarLateral.php"; ?>
        <main class="content">
            <div class="page-header">
                <h1>Cadastro de Produtos</h1>
                <p>Preencha os formulários abaixo para cadastrar o produto de sua loja!</p>
            </div>

            <form action="cadastro_produto.php" method="POST" class="form-container">
                <div class="form-section">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" id="nome" name="nome" placeholder="Nome do Produto">
                        </div>
                        <div class="form-group">
                            <label for="preco">Preço</label>
                            <input type="number" id="preco" name="preco" placeholder="Preço do Produto" step="0.01">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="custo">Custo</label>
                            <input type="number" id="custo" name="custo" placeholder="Custo do Produto" step="0.01">
                        </div>
                        <div class="form-group">
                            <label for="valor_total">Valor total</label>
                            <input type="number" id="valor_total" name="valor_total" placeholder="Valor de Venda do Produto" step="0.01">
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label for="descricao">Descrição</label>
                        <textarea id="descricao" name="descricao" placeholder="Detalhes do Produto"></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="categoria">Categoria</label>
                            <select id="categoria" name="categoria">
                                <option value="">Categoria</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="tipo">Tipo</label>
                            <select id="tipo" name="tipo">
                                <option value="">Tipo</option>
                                </select>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="validade">Validade</label>
                            <select id="validade" name="validade">
                                <option value="">Validade</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="marca">Marca</label>
                            <select id="marca" name="marca">
                                <option value="">Marca</option>
                                </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="local_armazenamento">Local de Armazenamento</label>
                            <select id="local_armazenamento" name="local_armazenamento">
                                <option value="">Local de Armazenamento</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="quantidade">Quantidade</label>
                            <input type="number" id="quantidade" name="quantidade" placeholder="Quantidade">
                        </div>
                    </div>
                </div>
                
                <div class="form-section">
                    <h2>Informações do Produto</h2>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="product_name">Product Name</label>
                            <input type="text" id="product_name" name="product_name" placeholder="Product Name">
                        </div>
                        <div class="form-group">
                            <label for="product_brand_model">Product Brand & Model</label>
                            <input type="text" id="product_brand_model" name="product_brand_model" placeholder="Product Brand & Model">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="product_model_id">Product Model ID</label>
                            <input type="text" id="product_model_id" name="product_model_id" placeholder="Product Model ID">
                        </div>
                        <div class="form-group">
                            <label for="product_fabrication_year">Product Fabrication Year</label>
                            <input type="number" id="product_fabrication_year" name="product_fabrication_year" placeholder="Product Fabrication Year">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="purchase_date">Purchase Date</label>
                            <input type="date" id="purchase_date" name="purchase_date" placeholder="Purchase Date">
                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-submit">Cadastrar Produto</button>
                </div>
            </form>
        </main>
    </div>
    </div>

    <script src="script.js"></script>
</body>
</html>