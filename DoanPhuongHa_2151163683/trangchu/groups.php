<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./NOTICE/bootstrap-5.3.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./NOTICE/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="./groups.css">

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php
            include "chung.php";
            ?>
            <div class="col-md-9">
                <?php
                include "chung2.php";
                ?>
                <div class="row ">
                    <h4 class=" text-center bg-danger">GROUPS</h4>
                </div>
                <div class="row">
                    <table>
                    <thead>
                            <tr>
                                <th scope="col">Group Name</th>
                                <th scope="col">User Count</th>
                                <th scope="col">PermCount</th>
                                <th scope="col">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Doan Phuong Ha</td>
                                <td>dphuongha212003@gmail.com</td>
                                <td>Male</td>
                                <td>
                                    <button class="btn btn-primary bg-dark" type="submit"><i class="fa-solid fa-shield"></i></button>
                                    <button class="btn btn-primary bg-primary" type="submit"><i class="fa-solid fa-pen"></i></button>
                                    <button class="btn btn-primary bg-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>

                    </table>

                </div>
            </div>
        </div>
    </div>
    <script src="./NOTICE/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>