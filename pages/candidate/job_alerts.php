<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location:/index.php');
}
require_once('../../lib/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<?php
require_once('../../head.php');
?>

<body class="p-0 position_header">
    <?php
    require_once('../../header.php');
    ?>
    <section class="content connect__profile">
        <?php require_once('../menu_left.php'); ?>
        <div class="right mh-100">
            <div class="container-fluid">
                <div class="row p-5">
                    <h3 class="title__content__profile">Job Alerts</h3>
                    <p class="link__home"><a href="/index.php">Home <i class="fas fa-angle-right"></i> </a>Job Alerts</p>
                    <div class="col-12">
                        <div class="profile_details bg-white">
                            <div class="bg-light title__detail">
                                Add New Alert
                            </div>
                            <form action="" method="post" class="row form__block p-5" enctype="multipart/form-data">
                                <div class="col-md-6 col-sm-12 col-12 flex">
                                    <div class="data__profile">
                                        <label for="">Tên việc làm</label>
                                        <input type="text" name="" value="" placeholder="Tên công việc...">
                                    </div>
                                    <?php
                                    $sql = "SELECT id,city_name FROM city";
                                    $city_table = getData($sql);
                                    ?>
                                    <div class="data__profile">
                                        <label>Địa chỉ công việc</label>
                                        <select name="location" id="" class="form-select chosen-select">
                                            <option value="0">Vui lòng chọn!</option>
                                            <?php foreach ($city_table as $city) { ?>
                                                <option value="<?php echo $city['id']; ?>"><?php echo $city['city_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="data__profile">
                                        <label>Thẻ</label>
                                        <select name="location" id="" class="form-select chosen-select">
                                            <option value="0">Vui lòng chọn!</option>
                                            <?php foreach ($city_table as $city) { ?>
                                                <option value="<?php echo $city['id']; ?>"><?php echo $city['city_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-12 flex">
                                    <div class="data__profile">
                                        <label for="">Từ Khóa</label>
                                        <input type="text" name="" value="" placeholder="Từ khóa...">
                                    </div>
                                    <?php
                                    $sql = "SELECT * FROM categories";
                                    $categories = getData($sql);
                                    ?>
                                    <div class="data__profile">
                                        <label>Địa chỉ công việc</label>
                                        <select name="categories" id="" class="form-select chosen-select">
                                            <option value="0">Vui lòng chọn!</option>
                                            <?php foreach ($categories as $category) { ?>
                                                <option value="<?php echo $category['id']; ?>"><?php echo ($category['parent_id'] <> 0) ? "-" . $category['name'] : $category['name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="data__profile">
                                        <label>Loại công việc</label>
                                        <select name="job_type" id="" multiple class="form-select chosen-select" placeholder="Vui lòng chọn">
                                            <option value="1">Full time</option>
                                            <option value="2">Freelance</option>
                                            <option value="3">Internship</option>
                                            <option value="4">Tempolary</option>
                                            <option value="5">Part time</option>
                                        </select>
                                    </div>
                                </div>
                                <button class="btn btn--all ms-0" type="submit" name="" id="">Thêm</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- jquery -->
    <script src="/js/jquery-3.7.0.min.js"></script>
    <script src="/js/code.jquery.com_ui_1.12.1_jquery-ui.js"></script>
    <script src="/js/numscroller-1.0.js"></script>
    <!-- bootstrap 5 -->
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="/js/slick.min.js"></script>
    <!-- chosen -->
    <script src="/js/chosen.jquery.min.js"></script>
    <script src="/js/chosen.proto.min.js"></script>
    <!-- sweetalert2 -->
    <script src="/js/cdnjs.cloudflare.com_ajax_libs_limonte-sweetalert2_11.7.12_sweetalert2.all.min.js"></script>
    <!-- typed js -->
    <script src="/js/cdnjs.cloudflare.com_ajax_libs_typed.js_2.0.10_typed.min.js"></script>
    <!-- scrollreveal js -->
    <script src="/js/unpkg.com_scrollreveal@4.0.9_dist_scrollreveal.js"></script>
    <!-- main js -->
    <script src="/js/main.js?v=<?php echo time(); ?>"></script>
</body>

</html>