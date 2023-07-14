<?php require_once('../lib/connect.php'); ?>
<!DOCTYPE html>
<html lang="en">

<?php
require_once('../head.php');
?>

<body class="p-0 position_header">
    <?php
    require_once('../header.php');
    ?>
    <section class="content connect__profile">
        <div class="left">
            <div class="left__position">
                <div class="left__block">
                    <h5 class="title__profile">Main</h5>
                    <ul class="list__profile">
                        <li class="item__profile"><a href="#" class="link__profile"><i class="fas fa-chart-line"></i> Dashboard</a></li>
                        <li class="item__profile"><a href="#" class="link__profile"><i class="fas fa-comment-alt"></i> Messages </a></li>
                        <li class="item__profile"><a href="/pages/bookmark.php" class="link__profile color__green"><i class="fas fa-bookmark"></i> Bookmarks</a></li>
                        <li class="item__profile"><a href="/pages/job_alerts.php" class="link__profile"><i class="fas fa-bell"></i> Job Alerts <span class="notification">1</span></a></li>
                    </ul>
                </div>
                <div class="left__block">
                    <h5 class="title__profile">Candidate</h5>
                    <ul class="list__profile">
                        <li class="item__profile"><a href="#" class="link__profile"><i class="fas fa-file"></i> Manage Resumes <span class="notification">1</span></a></li>
                        <li class="item__profile"><a href="/pages/add_resumer.php" class="link__profile"><i class="fas fa-file"></i> Add Resume</a></li>
                    </ul>
                </div>
                <div class="left__block">
                    <h5 class="title__profile">Account</h5>
                    <ul class="list__profile">
                        <li class="item__profile"><a href="/pages/profile.php" class="link__profile"><i class="fas fa-user-circle"></i> My Profile</a></li>
                        <li class="item__profile"><a href="/process_logout.php" class="link__profile"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="container-fluid">
                <div class="row p-5">
                    <h3 class="title__content__profile">My BookMarks</h3>
                    <p class="link__home"><a href="/index.php">Home <i class="fas fa-angle-right"></i> </a>My BookMarks</p>
                    <div class="profile_details bookmark_detail bg-white p-0">
                        <table class="table text__headline -size-15 m-0">
                            <thead class="table-dark">
                                <tr>
                                    <th><i class="fas fa-heart"></i> BookMark</th>
                                    <th><i class="fas fa-clipboard"></i> Ghi chú</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 1; $i <= 4; $i++) { ?>
                                    <tr>
                                        <td><a href="#">Senior Health and Nutrition Advisor</a></td>
                                        <td></td>
                                        <td><a href="#"><i class="fas fa-times"></i> Xóa</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Social Media and Public Relation Executive</a></td>
                                        <td>PARA ENVIARLE UN. TRACK CON BATERIA</td>
                                        <td><a href="#"><i class="fas fa-times"></i> Xóa</a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
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