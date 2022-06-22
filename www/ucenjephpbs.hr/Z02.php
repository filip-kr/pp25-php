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
            <h3>ZADATAK 2: Stranica ispisuje
                Shaquille O'Neal
                koristeći echo funkciju s jednostrukim navodnicima</h3>
            </p>
        </div>
        <div class="container-fluid border bg-light">
            <p><?php echo 'Shaquille O\'Neal'; ?></p>
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