<!DOCTYPE html>
<html lang="en" class="dark">

<?php
include "head.php";
?>
<body>

<?php
include "sidebar.php";
?>
    <!-- /# sidebar -->
    <?php
    include "header.php";
    ?>

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">App-Email</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-body">
                                    <div class="compose-email">
                                        <div class="mail-box">
                                            <aside class="sm-side">
                                                <div class="user-head">
                                                    <a class="inbox-avatar" href="javascript:;">
                                                        <img src="assets/images/user.jpg" alt="">
                                                    </a>
                                                    <div class="user-name">
                                                        <h5><a href="#">Mr Ajay </a></h5>
                                                        <span><a href="#">Support@example.com</a></span>
                                                    </div>
                                                </div>
                                                <div class="inbox-body text-center">
                                                    <a href="#myModal" data-toggle="modal" title="Compose" class="btn btn-compose"> Compose</a>
                                                    <!-- Modal -->
                                                    <div aria-hidden="true" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content text-left">
                                                                <div class="modal-header">
                                                                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button"><i class="ti-close"></i></button>
                                                                    <h4 class="modal-title">Compose</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form class="form-horizontal">
                                                                        <div class="form-group">
                                                                            <label class="col-lg-2 control-label">To</label>
                                                                            <div class="col-lg-10">
                                                                                <input type="text" placeholder="" id="inputEmail1" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-lg-2 control-label">Cc / Bcc</label>
                                                                            <div class="col-lg-10">
                                                                                <input type="text" placeholder="" id="cc" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-lg-2 control-label">Subject</label>
                                                                            <div class="col-lg-10">
                                                                                <input type="text" placeholder="" id="inputPassword1" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-lg-2 control-label">Message</label>
                                                                            <div class="col-lg-10">
                                                                                <textarea rows="10" cols="30" class="form-control" id="texarea1" name="texarea"></textarea>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <div class="col-lg-offset-2 col-lg-10">
                                                                                <span class="btn green fileinput-button"><i class="fa fa-plus fa fa-white"></i>
																	<span>Attachment</span>
                                                                                <input type="file" name="files[]" multiple="">
                                                                                </span>
                                                                                <button class="btn btn-primary" type="submit">Send</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- /.modal -->
                                                </div>
                                                <ul class="inbox-nav inbox-divider">
                                                    <li class="active">
                                                        <a href="#"><i class="fa fa-inbox"></i> Inbox <span class="badge badge-success pull-right m-t-12">2</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-envelope-o"></i> Sent Mail</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-bookmark-o"></i> Important</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class=" fa fa-external-link"></i> Drafts <span class="badge badge-info pull-right m-t-12">30</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class=" fa fa-trash-o"></i> Trash</a>
                                                    </li>
                                                </ul>
                                                <ul class="nav nav-pills nav-stacked labels-info inbox-divider">
                                                    <li>
                                                        <h4>Labels</h4>
                                                    </li>
                                                    <li>
                                                        <a href="#"> <i class=" fa fa-sign-blank text-danger"></i> Work </a>
                                                    </li>
                                                    <li>
                                                        <a href="#"> <i class=" fa fa-sign-blank text-success"></i> Design </a>
                                                    </li>
                                                    <li>
                                                        <a href="#"> <i class=" fa fa-sign-blank text-info"></i> Family </a>
                                                    </li>
                                                    <li>
                                                        <a href="#"> <i class=" fa fa-sign-blank text-warning"></i> Friends </a>
                                                    </li>
                                                    <li>
                                                        <a href="#"> <i class=" fa fa-sign-blank text-primary"></i> Office </a>
                                                    </li>
                                                </ul>
                                                <ul class="nav nav-pills nav-stacked labels-info">
                                                    <li>
                                                        <h4>Buddy online</h4>
                                                    </li>
                                                    <li>
                                                        <a href="#"> <i class=" fa fa-circle text-success"></i>Saiful Islam
                                                            <p>I do not think</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#"> <i class=" fa fa-circle text-danger"></i>Dark Coders
                                                            <p>Busy with coding</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#"> <i class=" fa fa-circle text-muted"></i>Mentaalist
                                                            <p>I out of control</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#"> <i class=" fa fa-circle text-muted"></i>H3s4m
                                                            <p>I am not here</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#"> <i class=" fa fa-circle text-muted"></i>Dead man
                                                            <p>I do not think</p>
                                                        </a>
                                                    </li>
                                                </ul>

                                                <div class="inbox-body text-center">
                                                    <div class="btn-group">
                                                        <a class="btn mini btn-primary" href="javascript:;">
                                                            <i class="fa fa-plus"></i>
                                                        </a>
                                                    </div>
                                                    <div class="btn-group">
                                                        <a class="btn mini btn-success" href="javascript:;">
                                                            <i class="fa fa-phone"></i>
                                                        </a>
                                                    </div>
                                                    <div class="btn-group">
                                                        <a class="btn mini btn-info" href="javascript:;">
                                                            <i class="fa fa-cog"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                            </aside>
                                            <aside class="lg-side">
                                                <div class="inbox-head">
                                                    <h3 class="input-text">Inbox</h3>
                                                    <form action="#" class="pull-right position">
                                                        <div class="input-append inner-append">
                                                            <input type="text" class="sr-input" placeholder="Search Mail">
                                                            <button class="btn sr-btn append-btn" type="button"><i class="fa fa-search"></i></button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="mail-option">
                                                    <div class="chk-all chk-group">
                                                        <input type="checkbox" class="mail-checkbox mail-group-checkbox" id="checkAll" />
                                                        <div class="btn-group">
                                                            <a data-toggle="dropdown" href="#" class="btn mini all m-l-10" aria-expanded="false">All<i class="fa fa-angle-down"></i></a>
                                                            <ul class="card-option-dropdown dropdown-menu">
                                                                <li><a href="#"> None</a></li>
                                                                <li><a href="#"> Read</a></li>
                                                                <li><a href="#"> Unread</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="btn-group">
                                                        <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                                            <i class=" fa fa-refresh"></i>
                                                        </a>
                                                    </div>
                                                    <div class="btn-group hidden-phone">
                                                        <a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false"> More<i class="fa fa-angle-down"></i></a>

                                                        <ul class="card-option-dropdown dropdown-menu">
                                                            <li><a href="#"><i class="ti-pencil"></i> Mark as Read</a></li>
                                                            <li><a href="#"><i class="ti-menu-alt"></i>Spam</a></li>
                                                            <li><a href="#"><i class="ti-trash"></i>Delete</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="btn-group">
                                                        <a data-toggle="dropdown" href="#" class="btn mini blue">Move to<i class="fa fa-angle-down"></i></a>
                                                        <ul class="card-option-dropdown dropdown-menu">
                                                            <li><a href="#">Draft</a></li>
                                                            <li><a href="#">Spam</a></li>
                                                            <li><a href="#"> Delete</a></li>
                                                        </ul>
                                                    </div>

                                                    <ul class="unstyled inbox-pagination pagination-list">
                                                        <li><span>1-50 of 234</span></li>
                                                        <li>
                                                            <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                                                        </li>
                                                        <li>
                                                            <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table table-inbox table-hover table-responsive">
                                                        <tbody>
                                                            <tr class="unread">
                                                                <td class="inbox-small-cells">
                                                                    <input type="checkbox" class="mail-checkbox">
                                                                </td>
                                                                <td class="inbox-small-cells"><i class="ti-star"></i></td>
                                                                <td class="view-message  dont-show">Müşterinin onayladığı sepet sipariş olrak bu sayfaya düşecek</td>
                                                                <td class="view-message">Added a new class: Login Class Fast Site</td>
                                                                <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                                                <td class="view-message  text-right">9:27 AM</td>
                                                            </tr>

                                                            <tr class="">
                                                                <td class="inbox-small-cells">
                                                                    <input type="checkbox" class="mail-checkbox">
                                                                </td>
                                                                <td class="inbox-small-cells"><i class="ti-star"></i></td>
                                                                <td class="view-message dont-show">Facebook</td>
                                                                <td class="view-message view-message">Saiful Islam Login faild</td>
                                                                <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                                                <td class="view-message text-right">feb 14</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </aside>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>This dashboard was generated on <span id="date-time"></span> <a href="#" class="page-refresh">Refresh Dashboard</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>


    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="assets/js/lib/jquery.nicescroll.min.js"></script>
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <script src="assets/js/lib/bootstrap.min.js"></script>


    <script src="assets/js/scripts.js"></script>
</body>

</html>