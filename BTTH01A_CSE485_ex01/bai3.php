<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        tr,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <div>

        <table>
            <thead>
                <tr>
                    <td>Ten khoa hoc</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $arrs = ['PHP', 'HTML', 'CSS', 'JS'];
                foreach ($arrs as $course) {
                ?>
                    <tr>
                        <td><?php echo $course ?></td>
                    </tr>
            </tbody>
            <?php
                    }
            ?>
        </table>
    </div>
</body>

</html>