<?php
require 'inc/functions.php';

$page = "facturi";
$pageTitle = "Lista Facturi | Time Tracker";

if (isset($_POST['delete'])) {
    if (delete_facturi(filter_input(INPUT_POST, 'delete', FILTER_SANITIZE_NUMBER_INT))) {
        header("Location: lista_facturi.php?msg=Project+Deleted");
        exit;
    } else {
        header("Location: lista_facturi.php?msg=Unable+to+Project+Task");
        exit;
    }
}


if (isset($_GET['msg'])) {
    $error_message = trim(filter_input(INPUT_GET, 'msg', FILTER_SANITIZE_STRING));
}
include 'inc/header.php';
?>
<div class="section catalog random">
    <div class="col-container page-container">
        <div class="col col-70-md col-60-lg col-center">
            <h1 class="actions-header">Lista facturi</h1>
            <div class="actions-item">
                <a class="actions-link" href="facturi.php">
                    <span class="actions-icon">
                        <svg viewbox="0 0 64 64"><use xlink:href="#task_icon"></use></svg>
                    </span>
                Adauga Facturi</a>
            </div>
            <?php
            if (isset($error_message)) {
                echo "<p class='message'>$error_message</p>";
            }
            ?>

            <div class="form-container">
              <table class="items">
                <tr>
                  <th>Nume</th>
                  <th>Pret</th>
                  <th>Data</th>
                  <th>Eit</th>
                  <th>Delete</th>
                </tr>
                <?php
                  foreach (get_lista_facturi() as $item) {
                    echo "<tr>";
                    echo "<td>" . $item['Nume'] . "</td>";
                    echo "<td>" . $item['Pret'] . "</td>";
                    echo "<td>" . $item['Data'] . "</td>";
                    echo "<td>";
                    echo "<a href='facturi.php?id=" . $item['id'] . "' class='btn btn-primary'>Edit</a>";
                    echo "</td>";
                    echo "<td>";
                    echo "<form method='post' action='lista_facturi.php' onsubmit=\"return confirm('Are you sure you want tot delete this project?');\">\n";
                    echo "<input type='hidden' value='" . $item['id'] . "' name='delete' />\n";
                    echo "<input type='submit' class='btn btn-danger' value='Delete' />\n";
                    echo "</form>\n";
                    echo "</td>";
                    // echo "<td>" .
                    //         "<a href='#' class='btn btn-info text-center'>
                    //             <span class='glyphicon glyphicon-edit'></span> Edit
                    //         </a>" .
                    //     "</td>";
                    // echo "<td>" .
                    //         "<a href='#' class='btn btn-danger text-center'>
                    //             <span class='glyphicon glyphicon-edit'></span> Delete
                    //         </a>" .
                    //     "</td>";
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
