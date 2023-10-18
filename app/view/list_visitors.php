<?php require VIEW . "/header.php" ?>

<?php
      if(count($visitors) == 0) {
        echo "<h2>Nenhuma visita foi cadastrada ainda! </h2>";
      } else {
        echo '<table id="list-visitors">';
        echo "<thead>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nome</th>";
        echo "<th>Data e Hora</th>";
        echo "<th>Nota</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        foreach ($visitors as $visitor) {
          echo "<tr>";
          echo "<td>" . $visitor->getId() . "</td>"; // ID
          echo "<td>" . $visitor->getName() . "</td>"; // Nome
          echo "<td>" . $visitor->getDate("br") . "</td>"; // Data e Hora
          echo "<td>" . $visitor->getRating() . "</td>"; // Nota
          echo "</tr>";
      }
      }
        ?>
      
  </tbody>
</table>

<?php require VIEW . "/footer.php" ?>