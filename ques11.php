<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 400px;
        }

        td {
            width: 30px;
            height: 30px;
        }

        .white {
            background-color: #fff;
        }

        .black {
            background-color: #000;
        }
    </style>
</head>
<body>
    <table>
        <?php
        for ($row = 1; $row <= 8; $row++) {
            echo '<tr>';
            for ($col = 1; $col <= 8; $col++) {
                $class = (($row + $col) % 2 == 0) ? 'white' : 'black';
                echo '<td class="' . $class . '"></td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>
