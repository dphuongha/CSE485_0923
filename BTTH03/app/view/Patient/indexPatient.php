<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang thông tin bệnh nhân </title>
    <script src="https://kit.fontawesome.com/YOUR_KIT_ID.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="contrainer-fluid" style="background-color: silver;">
        <?php require_once APP_ROOT . '/app/view/layout/menu.php'; ?>
    </div>
    <div class="container">
        <h3 class="text-center text-success my-3">Thông tin bệnh nhân</h3>
        <a href="?controller=patient&action=add_patient" class="btn btn-success">Thêm mới</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã bệnh nhân</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Ngày khám</th>
                    <th scope="col">Triệu chứng</th>
                    <th scope="col">Mã bác sĩ</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($patients as $patient) {
                    ?>
                    <tr>
                        <th scope="row">
                            <?= $patient->getIdPatient(); ?>
                        </th>
                        <td>
                            <?= $patient->getNamePatient(); ?>
                        </td>
                        
                        <td>
                            <?= $patient->getDayexam(); ?>
                        </td>
                        <td>
                            <?= $patient->getSick(); ?>
                        </td>
                        <td>
                            <?= $patient->getId(); ?>
                        </td>

                        <td>
                            <a class="color-primary" style="text-decoration: none;"  href="">Sửa</i></a>
                        </td>
                        <td>
                            <!-- <a class="fs-4 color-primary user-delete-link" href="" data-bs-toggle="modal"
                                data-bs-target="#modal<?php echo $patient->getIdPatient(); ?>">
                                Xóa</i>
                            </a> -->

                            <a class=" color-primary" style="text-decoration: none;" href="?controller=patient&action=process_delete&idSelect=<?php echo $patient->getIdPatient();?>">Xóa</i></a>
                        </td>
                        <!-- Modal -->
                        <!-- <div class="modal fade" id="modal<?php //echo $patient->getIdPatient(); ?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">DELETE</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Bạn có chắc chắn muốn xóa bệnh nhân có Id:
                                        <?php //echo $patient->getIdPatient(); ?>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <a
                                            href="?controller=patient&action=process_delete&idSelect=<?php //echo $patient->getIdPatient();?>">
                                            <button type="button" class="btn btn-primary">Yes</button>
                                        </a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </tr>

                    <?php
                }
                ?>
            </tbody>
        </table>

    </div>
    <script src="./NOTICE/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>