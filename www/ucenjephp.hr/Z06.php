<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <?php require_once 'head.php'; ?>
</head>

<body>
    <!-- START zagljavlje -->
    <header>
        <?php require_once 'zaglavlje.php'; ?>
    </header>
    <!-- END zaglavlje -->

    <!-- START tijelo -->
    <main>
        <div class="callout">
            <div class="gornji-tekst">
                <h5>Stranica prima cijeli broj (i).
                    Ako je broj paran boja okvira treba biti zelena,
                    inače treba biti crvena.
                </h5>
            </div>
        </div>
        <?php
        $i = $_GET['i'];

        if (isset($_GET['i'])) {
            if ($i % 2 === 0) {
                echo '<div style=\'background-color: green;\'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, qui.</div>';
            } else if ($i % 2 === 1) {
                echo '<div style=\'background-color: red;\'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, qui.</div>';
            }
        } else echo '<b>Unesi parametar!</b>';

        ?>
    </main>
    <!-- END tijelo -->

    <!-- START podnožje -->
    <footer>
        <?php require_once 'podnozje.php'; ?>
    </footer>
    <!-- END podnožje -->


    <!-- JavaScript -->
    <?php require_once 'js.php'; ?>
</body>

</html>