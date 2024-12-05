<?php
if (isset($_COOKIE['new_stock'])) {
    echo '<a href="./new_stock.php"><span class="tag">Enregistrement de stock en cours. cliquer pour poursuivre.</span><progress class="progress is-info is-tiny" max="100">
                                            45%
                                        </progress></a>';
    # code...
}
if (isset($_COOKIE['new_sell'])) {
    echo '<a href="./sells.php"><span class="tag">Vente en cours. cliquer pour poursuivre.</span><progress class="progress is-success is-tiny" max="100">
                                            45%
                                        </progress></a>';
    # code...
}