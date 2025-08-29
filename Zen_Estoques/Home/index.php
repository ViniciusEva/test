<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../Home/style_hom.css">
    <link rel="stylesheet" href="../style_navbar.css">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <?php include "../navbarLateral.php"; ?>
        <!-- Main Content -->
        <main class="col-md-10 d-flex flex-column align-items-center justify-content-center" style="height: 100vh;">
            <button class="action-btn">
                <i class="bi bi-person-plus action-icon"></i>Cadastro
            </button>
            <button class="action-btn">
                <i class="bi bi-bookmark action-icon"></i> Consultar
            </button>
            <button class="action-btn">
                <i class="bi bi-pencil-square action-icon"></i> Editar
            </button>
            <button class="action-btn">
                <i class="bi bi-download action-icon"></i> Remover
            </button>
        </main>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>