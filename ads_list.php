<div class="ads-list">
<?php
include_once 'connect.php';

$result = mysqli_query($connection, 'SELECT * FROM espaco');

while ($row = $result->fetch_array()) {
    $id = $row['id'];
    $descricao = $row['descricao'];
    $obs = $row['obs'];
    $latitude = $row['latitude'];
    $longitude = $row['longitude'];

    echo "
      <div class='ads-card'>
      <div class='ads-title'>
        " .
        $id .
        ' - ' .
        $descricao .
        "
      </div>

      <div class='ads-image'>
        <img src='images/aeroporto-001.jpg'>
      </div>

      <div class='ads-obs'>
      " .
        $obs .
        "
      </div>

      <div class='ads-buttons'>
        <div class='ads-details-button'>
          <button>Ver detalhes</button>
          <button>Ver mapa</button>
        </div>
      </div>
      </div>
    ";
}
?>

</div>