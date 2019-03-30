<?php
require 'inc/functions.php';

$pageTitle = "Project | Time Tracker";
$page = "projects";
$title = $category = '';

// if (isset($_GET['id'])) {
//     list($id, $nume, $pret) = add_facturi(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT));
// }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $nume = trim(filter_input(INPUT_POST, 'nume', FILTER_SANITIZE_STRING));
    $pret = trim(filter_input(INPUT_POST, 'pret', FILTER_SANITIZE_STRING));

    if (empty($nume) || empty($pret)) {
        $error_message = 'Please fill in the required fields: nume, pret';
    } else {
        if (add_project($nume, $pret, $id)) {
            header('Location: list_facturi.php');
            exit;
        } else {
            $error_message = 'Could not add project';
        }
    }
}

include 'inc/header.php';
?>

<div class="section page">
    <div class="col-container page-container">
        <div class="col col-70-md col-60-lg col-center">
            <h1 class="actions-header"><?php
            if (!empty($id)) {
                echo "Update";
            } else {
                echo "Add";
            }
            ?> Facturi</h1>
            <?php
            if (isset($error_message)) {
                echo "<p class='message'>$error_message</p>";
            }
            ?>
            <form class="form-container form-add" method="post" action="facturi.php">
                <table>
                    <tr>
                        <th><label for="nume">nume<span class="required">*</span></label></th>
                        <td><input type="text" id="nume" name="nume" value="<?php echo htmlspecialchars($nume); ?>" /></td>
                    </tr>
                    <tr>
                        <th><label for="pret">pret<span class="required">*</span></label></th>
                        <td><input type="number" id="pret" name="pret" value="<?php echo htmlspecialchars($pret); ?>" /></td>
                    </tr>
                </table>
                <?php
                if (!empty($id)) {
                    echo "<input type='hidden' name='id' value='$id' />";
                }
                ?>
                <input class="button button--primary button--topic-php" type="submit" value="Submit" />
            </form>
        </div>
    </div>
</div>

<?php include "inc/footer.php"; ?>
