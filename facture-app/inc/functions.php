<?php
function get_lista_facturi() {
    include 'connection.php';

    try {
        return $db->query('SELECT * FROM facturi');
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br />";
        return array();
    }
}

function get_list_chitante() {
    include 'connection.php';

    try {
        return $db->query('SELECT * FROM chitante');
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br />";
        return array();
    }
}

function add_facturi($nume, $pret){
    include 'connection.php';

    $sql = 'INSERT INTO facturi(nume, pret) VALUES(?, ?)';

    try {
        $results = $db->prepare($sql);
        $results->bindValue(1, $nume, PDO::PARAM_STR);
        $results->bindValue(2, $pret, PDO::PARAM_INT);
        // if ($id) {
        //     $results->bindValue(3, $id, PDO::PARAM_INT);
        // }
        $results->execute();
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    return true;
}

function add_chitante($produse, $pret){
    include 'connection.php';

    $sql = 'INSERT INTO chitante(produse, pret) VALUES(?, ?)';

    try {
        $results = $db->prepare($sql);
        $results->bindValue(1, $produse, PDO::PARAM_STR);
        $results->bindValue(2, $pret, PDO::PARAM_INT);
        // if ($id) {
        //     $results->bindValue(3, $id, PDO::PARAM_INT);
        // }
        $results->execute();
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    return true;
}

function get_facturi($id) {
  include 'connection.php';

  $sql = 'SELECT * FROM facturi WHERE id = ?';

  try {
      $results = $db->prepare($sql);
      $results->bindValue(1, $id, PDO::PARAM_INT);
      $results->execute();
  } catch (Exception $e) {
      echo "Error!: " . $e->getMessage() . "<br />";
      return false;
  }
  return $results->fetch();
}

// delete the product
function delete_facturi($id){
    include 'connection.php';

    $sql = 'DELETE FROM facturi WHERE id = ?';

    try {
        $results = $db->prepare($sql);
        $results->bindValue(1, $id, PDO::PARAM_INT);
        $results->execute();
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    return true;
}

function update_facturi($nume, $pret, $id = null) {
  include 'connection.php';
    if ($id) {
      $sql = 'UPDATE facturi SET nume = ?, pret = ? WHERE id = ?';
    }
    // } else {
    //     $sql = 'INSERT INTO facturi(nume, pret) VALUES(?, ?)';
    // }

    try {
        $results = $db->prepare($sql);
        $results->bindValue(1, $nume, PDO::PARAM_STR);
        $results->bindValue(2, $pret, PDO::PARAM_INT);
        if ($id) {
          $results->bindValue(3, $id, PDO::PARAM_INT);
        }
        $results->execute();
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    return true;
}

?>
