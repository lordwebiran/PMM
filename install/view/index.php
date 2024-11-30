<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="fairsketch">
    <link rel="icon" href="../assets/images/favicon.png" />
    <title>نصب ماژول مدیریت پروژه</title>
    <link rel='stylesheet' type='text/css' href='../assets/bootstrap/css/bootstrap.min.css' />
    <link rel='stylesheet' type='text/css' href='../assets/bootstrap/css/bootstrap-rtl.min.css' />
    <link rel='stylesheet' type='text/css' href='../assets/js/font-awesome/css/font-awesome.min.css' />

    <link rel='stylesheet' type='text/css' href='install.css' />

    <script type='text/javascript' src='../assets/js/jquery-1.11.3.min.js'></script>
    <script type='text/javascript' src='../assets/js/jquery-validation/jquery.validate.min.js'></script>
    <script type='text/javascript' src='../assets/js/jquery-validation/jquery.form.js'></script>

</head>

<body>
    <div class="install-box">

        <div class="panel panel-install">
            <div class="panel-heading text-center">
                <h2>نصب کننده آسان</h2>
            </div>
            <div class="panel-body no-padding">
                <div class="tab-container clearfix">
                    <div id="pre-installation" class="tab-title col-sm-4 active"><i class="fa fa-circle-o"></i><strong style="margin-right: 1rem;">قبل از نصب</strong></span></div>
                    <div id="configuration" class="tab-title col-sm-4"><i class="fa fa-circle-o"></i><strong style="margin-right: 1rem;">پیکربندی</strong></div>
                    <div id="finished" class="tab-title col-sm-4"><i class="fa fa-circle-o"></i><strong style="margin-right: 1rem;">تمام شد</strong></div>
                </div>
                <div id="alert-container">

                </div>


                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="pre-installation-tab">
                        <div class="section">
                            <p>1. لطفا تنظیمات PHP خود را برای مطابقت با شرایط زیر پیکربندی کنید:</p>
                            <hr />
                            <div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th width="25%">تنظیمات PHP</th>
                                            <th width="27%">نسخه فعلی</th>
                                            <th>نسخه مورد نیاز</th>
                                            <th class="text-center">وضعیت</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>نسخه پی اچ پی</td>
                                            <td><?php echo $current_php_version; ?></td>
                                            <td><?php echo $php_version_required; ?> به بالا تر </td>
                                            <td class="text-center">
                                                <?php if ($php_version_success) { ?>
                                                    <i class="status fa fa-check-circle-o"></i>
                                                <?php } else { ?>
                                                    <i class="status fa fa-times-circle-o"></i>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="section">
                            <p>2. لطفاً مطمئن شوید که برنامه‌های افزودنی/تنظیمات فهرست شده در زیر نصب/فعال هستند:</p>
                            <hr />
                            <div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th width="25%">پسوند/تنظیمات</th>
                                            <th width="27%">تنظیمات فعلی</th>
                                            <th>تنظیمات مورد نیاز</th>
                                            <th class="text-center">وضعیت</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>MySQLi</td>
                                            <td> <?php if ($mysql_success) { ?>
                                                    On
                                                <?php } else { ?>
                                                    Off
                                                <?php } ?>
                                            </td>
                                            <td>On</td>
                                            <td class="text-center">
                                                <?php if ($mysql_success) { ?>
                                                    <i class="status fa fa-check-circle-o"></i>
                                                <?php } else { ?>
                                                    <i class="status fa fa-times-circle-o"></i>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>GD</td>
                                            <td> <?php if ($gd_success) { ?>
                                                    On
                                                <?php } else { ?>
                                                    Off
                                                <?php } ?>
                                            </td>
                                            <td>On</td>
                                            <td class="text-center">
                                                <?php if ($gd_success) { ?>
                                                    <i class="status fa fa-check-circle-o"></i>
                                                <?php } else { ?>
                                                    <i class="status fa fa-times-circle-o"></i>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>cURL</td>
                                            <td> <?php if ($curl_success) { ?>
                                                    On
                                                <?php } else { ?>
                                                    Off
                                                <?php } ?>
                                            </td>
                                            <td>On</td>
                                            <td class="text-center">
                                                <?php if ($curl_success) { ?>
                                                    <i class="status fa fa-check-circle-o"></i>
                                                <?php } else { ?>
                                                    <i class="status fa fa-times-circle-o"></i>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>mbstring</td>
                                            <td> <?php if ($mbstring_success) { ?>
                                                    On
                                                <?php } else { ?>
                                                    Off
                                                <?php } ?>
                                            </td>
                                            <td>On</td>
                                            <td class="text-center">
                                                <?php if ($mbstring_success) { ?>
                                                    <i class="status fa fa-check-circle-o"></i>
                                                <?php } else { ?>
                                                    <i class="status fa fa-times-circle-o"></i>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>date.timezone</td>
                                            <td> <?php if ($timezone_success) {
                                                        echo $timezone_settings;
                                                    } else {
                                                        echo "Null";
                                                    } ?>
                                            </td>
                                            <td>Timezone</td>
                                            <td class="text-center">
                                                <?php if ($timezone_success) { ?>
                                                    <i class="status fa fa-check-circle-o"></i>
                                                <?php } else { ?>
                                                    <i class="status fa fa-times-circle-o"></i>
                                                <?php } ?>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="section">
                            <p> لطفاً مطمئن شوید که دسترسی <strong>نوشتنی (writable)</strong> را برای پوشه‌ها/فایل‌های زیر تنظیم کرده‌اید:</p>
                            <hr />
                            <div>
                                <table>
                                    <tbody>
                                        <?php
                                        foreach ($writeable_directories as $value) {
                                        ?>
                                            <tr>
                                                <td style="width:87%;"><?php echo $value; ?></td>
                                                <td class="text-center">
                                                    <?php if (is_writeable(".." . $value)) { ?>
                                                        <i class="status fa fa-check-circle-o"></i>
                                                    <?php
                                                    } else {
                                                        $all_requirement_success = false;
                                                    ?>
                                                        <i class="status fa fa-times-circle-o"></i>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="panel-footer">
                            <button <?php
                                    if (!$all_requirement_success) {
                                        echo "disabled=disabled";
                                    }
                                    ?> class="btn btn-info form-next">بعدی <i class='fa fa-chevron-left'></i></button>
                        </div>

                    </div>
                    <div role="tabpanel" class="tab-pane" id="configuration-tab">
                        <form name="config-form" id="config-form" action="do_install.php" method="post">

                            <div class="section clearfix">
                                <p>1. لطفا جزئیات اتصال پایگاه داده خود را وارد کنید.</p>
                                <hr />
                                <div>
                                    <div class="form-group clearfix">
                                        <label for="host" class=" col-md-3">میزبان پایگاه داده</label>
                                        <div class="col-md-9">
                                            <input type="text" value="localhost" id="host" name="host" class="form-control" placeholder="میزبان پایگاه داده (localhost)" />
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label for="dbuser" class=" col-md-3">کاربر پایگاه داده</label>
                                        <div class=" col-md-9">
                                            <input id="dbuser" type="text" value="" name="dbuser" class="form-control" autocomplete="off" placeholder="نام کاربری پایگاه داده" />
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label for="dbpassword" class=" col-md-3">رمز عبور</label>
                                        <div class=" col-md-9">
                                            <input id="dbpassword" type="password" value="" name="dbpassword" class="form-control" autocomplete="off" placeholder="رمز عبور کاربر پایگاه داده" />
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label for="dbname" class=" col-md-3">نام پایگاه داده</label>
                                        <div class=" col-md-9">
                                            <input id="dbname" type="text" value="" name="dbname" class="form-control" placeholder="نام پایگاه داده" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="section clearfix">
                                <p>2. لطفا مشخصات حساب خود را برای مدیریت وارد کنید.</p>
                                <hr />
                                <div>
                                    <div class="form-group clearfix">
                                        <label for="first_name" class=" col-md-3">نام</label>
                                        <div class="col-md-9">
                                            <input type="text" value="" id="first_name" name="first_name" class="form-control" placeholder="نام شما" />
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label for="last_name" class=" col-md-3">نام خانوادگی</label>
                                        <div class=" col-md-9">
                                            <input type="text" value="" id="last_name" name="last_name" class="form-control" placeholder="نام خانوادگی شما" />
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label for="email" class=" col-md-3">ایمیل</label>
                                        <div class=" col-md-9">
                                            <input id="email" type="text" value="" name="email" class="form-control" placeholder="ایمیل شما" />
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label for="password" class=" col-md-3">رمز عبور</label>
                                        <div class=" col-md-9">
                                            <input id="password" type="password" value="" name="password" class="form-control" placeholder="رمز ورود" />
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- <div class="section clearfix">
                                <p>3. لطفا کد خرید کالای خود را وارد کنید.</p>
                                <hr />
                                <div>
                                    <div class="form-group clearfix">
                                        <label for="purchase_code" class=" col-md-3">کد خرید کالا</label>
                                        <div class="col-md-9">
                                            <input type="text" value="" id="purchase_code" name="purchase_code" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <div class="panel-footer">
                                <button type="submit" class="btn btn-info form-next">
                                    <span class="loader hide"> لطفا صبر کنید...</span>
                                    <span class="button-text">پایان <i class='fa fa-chevron-left'></i></span>
                                </button>
                            </div>

                        </form>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="finished-tab">
                        <div class="section">
                            <div class="clearfix">
                                <i class="status fa fa-check-circle-o pull-left" style="font-size: 50px"> </i><span class="pull-left" style="line-height: 50px;">تبریک میگم شما با موفقیت ماژول مدیریت پروژه را نصب کردید</span>
                            </div>

                            <div style="margin: 15px 0 15px 60px; color: #d73b3b;">
                            فراموش نکنید که دایرکتوری <b>install</b> را حذف کنید!
                            </div>
                            <a class="go-to-login-page" href="<?php echo $dashboard_url; ?>">
                                <div class="text-center">
                                    <div style="font-size: 100px;"><i class="fa fa-desktop"></i></div>
                                    <div>به صفحه ورود خود بروید</div>
                                </div>
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script type="text/javascript">
    var onFormSubmit = function($form) {
        $form.find('[type="submit"]').attr('disabled', 'disabled').find(".loader").removeClass("hide");
        $form.find('[type="submit"]').find(".button-text").addClass("hide");
        $("#alert-container").html("");
    };
    var onSubmitSussess = function($form) {
        $form.find('[type="submit"]').removeAttr('disabled').find(".loader").addClass("hide");
        $form.find('[type="submit"]').find(".button-text").removeClass("hide");
    };

    $(document).ready(function() {
        var $preInstallationTab = $("#pre-installation-tab"),
            $configurationTab = $("#configuration-tab");

        $(".form-next").click(function() {
            if ($preInstallationTab.hasClass("active")) {
                $preInstallationTab.removeClass("active");
                $configurationTab.addClass("active");
                $("#pre-installation").find("i").removeClass("fa-circle-o").addClass("fa-check-circle");
                $("#configuration").addClass("active");
                $("#host").focus();
            }
        });

        $("#config-form").submit(function() {
            var $form = $(this);
            onFormSubmit($form);
            $form.ajaxSubmit({
                dataType: "json",
                success: function(result) {
                    onSubmitSussess($form, result);
                    if (result.success) {
                        $configurationTab.removeClass("active");
                        $("#configuration").find("i").removeClass("fa-circle-o").addClass("fa-check-circle");
                        $("#finished").find("i").removeClass("fa-circle-o").addClass("fa-check-circle");
                        $("#finished").addClass("active");
                        $("#finished-tab").addClass("active");
                    } else {
                        $("#alert-container").html('<div class="alert alert-danger" role="alert">' + result.message + '</div>');
                    }
                }
            });
            return false;
        });

    });
</script>