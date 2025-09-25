<main class="container mt-4 border rounded-2">
    <?php
    if (!isset($_GET['page'])) {
        include 'the-police.php';
    } else {
        $page = $_GET['page'];
        $allowed_pages = ['exercicio-1', 'exercicio-2', 'exercicio-3', 'exercicio-4', 'exercicio-5', 'exercicio-6', 'exercicio-7', 'exercicio-8', 'exercicio-9', 'exercicio-10', 'sobre'];
        if (in_array($page, $allowed_pages)) {
            include $page . '.php';
        } else {
            echo '<h1 class="text-danger text-center mt-3">Página não encontrada</h1>';
        }
    }
    ?>

</main>