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
            <h3>Dobrodošli!</h3>
            </p>
        </div>
        <div class="container-fluid border bg-light">
            <p>Bootstrap izdanje stranice ucenjephp.hr</p>
            <p>Kao i prije, poslužite se izbornikom i svjedočite mojoj marljivosti u učenju PHP-a</p>
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