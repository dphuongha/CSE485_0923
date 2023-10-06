<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form thêm sinh viên</title>
    <script src="https://kit.fontawesome.com/YOUR_KIT_ID.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="contrainer-fluid" style="background-color: silver;">
        <?php require_once APP_ROOT . '/app/view/layout/menu.php'; ?>
    </div>
    <div class="container">
        <h3 class="text-center py-3">THÊM THÔNG TIN BỆNH NHÂN</h3>
        <form action="?controller=patient&action=process_add" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Tên bệnh nhân</span>
                <input type="text" class="form-control" name="namePatient">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Ngày khám</span>
                <input type="date" class="form-control" name="dayexam">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Triệu chứng</span>
                <input type="text" class="form-control" name="sick">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text " for="inputGroupSelect01">Mã bác sĩ</label>
                <select class="form-select " id="inputGroupSelect01" name="id">
                    <?php foreach ($doctors as $doctor) { ?>
                        <option value="<?= $doctor->getId(); ?>">
                            <?= $doctor->getId(); ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <button class="btn btn-success" type="submit" name="sbmSave">Thêm mới</button>
                </div>
            </div>
        </form>

    </div>
    <script src="./NOTICE/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>