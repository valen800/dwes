<style>
    td {
        border: 1px solid grey;
        padding: 5px;
    }
</style>

<?php
    const COLLENGHT = 11;
    const ROWLENGHT = 10;

    $col = 23;
    $row = 1;

    $colDiv = 23;
    $rowDiv = 1;
?>

    <table class="table">
        <tr>
        <td>/</td>

<?php
    for ($i = 0; $i < COLLENGHT; $i++) {
        echo '<td>'.$col.'</td>';
        $col++;
    }

    for ($i = 0; $i < ROWLENGHT; $i++) {
        echo "<tr>";
        echo "<td>".$row."</td>";
        $row++;

        for ($j = 0; $j < COLLENGHT; $j++) {
            echo "<td>".$rowDiv."%".$colDiv."</td>";
        }
        echo "</tr>";
        $rowDiv++;
    }

?>
        </tr>
    </table>