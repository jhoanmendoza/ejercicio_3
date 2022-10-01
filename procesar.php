<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>números representados al cuadrado y al cubo.</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
</head>

<body>
    <div class="container text-center col-6 col-sm-6 mt-4">
        <table class="table table-dark table-bordered border-info table-sm table-hover">
            <tr>
                <td>Número</td>
                <td>Cuadrado</td>
                <td>Cubo</td>
            </tr>
            <?php
            $N = $_GET['N'];
            for ($i = 1; $i <= $N; $i++) {
                print  "<tr> ";
                print  "<td> $i </td>";
                printf("<td> %d </td>", $i * $i);
                printf("<td> %d </td>", $i * $i * $i);
                print  "</tr> ";
            }
            ?>
        </table>
    </div>
</body>

</html>