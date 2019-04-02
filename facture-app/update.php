<?php
require 'inc/functions.php';

$pageTitle = "Project | Time Tracker";
$page = "projects";
$nume = $pret = '';


include 'inc/header.php';



$id = $_GET['id'];
echo $id;
$sql = "SELECT * from facturi where id='$id'";

$rows = $db->query($sql);
echo "string1";
$row = $rows->fetch_assoc();
echo "string2";
var_dump($row);
echo "string3";
?>

<div class="section page">
    <div class="col-container page-container">
        <div class="col col-70-md col-60-lg col-center">
            <h1 class="actions-header">Update</h1>
            <?php
            if (isset($error_message)) {
                echo "<p class='message'>$error_message</p>";
            }
            ?>
            <form class="form-container form-add" method="post" action="update.php">
                <table>
                    <tr>
                        <th><label for="nume">nume<span class="required">*</span></label></th>
                        <td><input type="text" id="nume" name="nume" value="<?php echo $nume; ?>" /></td>
                    </tr>
                    <tr>
                        <th><label for="pret">pret<span class="required">*</span></label></th>
                        <td><input type="number" id="pret" name="pret" value="<?php echo $pret; ?>" /></td>
                    </tr>
                </table>
                <input class="button button--primary button--topic-php" type="submit" value="Submit" />
            </form>
        </div>
    </div>
</div>

<?php include "inc/footer.php"; ?>
