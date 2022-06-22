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
            <h3>ZADATAK 3: Stranica prima 4 parametara
                i ispisuje ih jedno pored drugog
                svaki u svom panelu (callout) na large širini
                (p1, p2, p3, p4)</h3>
            </p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col border">
                    <?php echo $_GET['p1']; ?>
                </div>
                <div class="col border">
                    <?php echo $_GET['p2']; ?>
                </div>
                <div class="col border">
                    <?php echo $_GET['p3']; ?>
                </div>
                <div class="col border">
                    <?php echo $_GET['p4']; ?>
                </div>
            </div>
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