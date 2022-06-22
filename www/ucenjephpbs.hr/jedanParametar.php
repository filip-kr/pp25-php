<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'head.php'; ?>
</head>

<body>
    <header>
        <!-- START zaglavlje -->
        <?php require_once 'zaglavlje.php'; ?>
        <!-- END zaglavlje -->
    </header>

    <main>
        <!-- START tijelo -->
        <div class="container-fluid border bg-warning">
            <p>
            <h3>Unesite parametar 'ime' u URL</h3>
            </p>
        </div>
        <div class="container-fluid border bg-light">
            <p>'ime' glasi <?php echo $_GET['ime']; ?></p>
        </div>
        <!-- END tijelo -->
    </main>

    <footer>
        <!-- START podnožje -->
        <?php require_once 'podnozje.php'; ?>
        <!-- END podnožje -->
    </footer>

    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>