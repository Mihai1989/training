<?php
require 'inc/functions.php';

$page = "facturi";
$pageTitle = "Lista Facturi | Time Tracker";

include 'inc/header.php';
?>
<div class="section catalog random">
    <div class="col-container page-container">
        <div class="col col-70-md col-60-lg col-center">
            <h1 class="actions-header">Lista chitante</h1>
            <div class="actions-item">
                <a class="actions-link" href="chitante.php">
                    <span class="actions-icon">
                        <svg viewbox="0 0 64 64"><use xlink:href="#task_icon"></use></svg>
                    </span>
                Adauga Chitanta</a>
            </div>
            <?php
            if (isset($error_message)) {
                echo "<p class='message'>$error_message</p>";
            }
            ?>

            <div class="form-container">
              <table class="items">
                <tr>
                  <th>Produse</th>
                  <th>Pret</th>
                  <th>Data</th>
                </tr>
                <?php
                  foreach (get_list_chitante() as $item) {
                    echo "<tr>";
                    echo "<td>" . $item['Produse'] . "</td>";
                    echo "<td>" . $item['Pret'] . "</td>";
                    echo "<td>" . $item['Data'] . "</td>";
                    echo "</tr>";
                  }
                ?>
              </table>

              <table>


              </table>
            </div>
        </div>
    </div>
</div>

<?php include("inc/footer.php"); ?>
