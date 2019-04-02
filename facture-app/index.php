<?php
require 'inc/functions.php';

$pageTitle = "Inregistrare Facturi";
$page = null;

include 'inc/header.php';
?>
	<div class="section catalog random">
    <div class="col-container actions-container">

      <h1>Bun Venit!</h1>
      <p class="actions-copy">Organizeaza-ti portofelul?</p>
      <div class="actions-wrapper">
        <ul class="actions">
          <li class="actions-item">
            <a class="actions-link" href="facturi.php">
              <span class="actions-icon">
                <svg viewbox="0 0 64 64"><use xlink:href="#task_icon"></use></svg>
              </span>
              Adauga Facturi
            </a>
          </li>
          <li class="actions-item">
            <a class="actions-link" href="chitante.php">
              <span class="actions-icon">
                <svg viewbox="0 0 64 64"><use xlink:href="#project_icon"></use></svg>
              </span>
              Adauga Bonuri
            </a>
          </li>
          <li class="actions-item">
            <a class="actions-link" href="reports.php">
              <span class="actions-icon">
                <svg viewbox="0 0 64 64"><use xlink:href="#report_icon"></use></svg>
              </span>
              Vizualizare Raport
            </a>
          </li>
        </ul>
      </div>

		</div>

	</div>

<?php include("inc/footer.php"); ?>
