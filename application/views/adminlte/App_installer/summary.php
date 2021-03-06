<!DOCTYPE html>
<html>
<head>
    <?php echo $this->template->load_html_component('header-assets') ?>
</head>

<body class="skin-blue sidebar-mini layout-fixed">

    <!-- Loading layer -->
    <div class="loading-layer"></div>
    <div class="loading-box"><h4><i class="fa fa-fw fa-circle-o-notch fa-spin"></i> <?php echo lang('Loading')?></h4></div>

    <!-- Application constants hidden inputs -->
    <?php echo app_settings_inputs(); ?>

    <div class="wrapper">

        <header class="main-header">

            <!-- Logo -->
            <a href="javascript:void(0)" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini text-bold"><?php echo substr(APP_NAME, 0, 1) ?></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><img src="<?php echo  URL_IMG ?>/logo-acme.png" /></span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">

                <ul class="nav navbar-nav">

                    <li><a href="http://www.acmeframework.org/docs" target="_blank"><i class="fa fa-fw fa-question-circle"></i> <?php echo lang('Help') ?></a></li>

                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-fw fa-globe"></i>

                            <?php

                            // Get language
                            $lang = $this->session->userdata('language');

                            // Write language name
                            switch ($lang) {

                                case 'en_US':
                                default:
                                    echo lang('English');
                                break;

                                case 'pt_BR':
                                    echo lang('Brazilian Portuguese');
                                break;
                            }

                            ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="javascript:void(0)" class="change-language" id="en_US">
                                    <i class="fa fa-fw text-danger <?php echo $lang == 'en_US' ? 'fa-dot-circle-o' : 'fa-circle-o'; ?>"></i>
                                    <?php echo lang('English') ?>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="change-language" id="pt_BR">
                                    <i class="fa fa-fw text-danger <?php echo $lang == 'pt_BR' ? 'fa-dot-circle-o' : 'fa-circle-o'; ?>"></i>
                                    <?php echo lang('Brazilian Portuguese') ?>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>

            </nav>

        </header>

        <!-- Content loaded by View -->
        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content">

                <div class="module-header">

                    <div class="row">

                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                            <h1>
                                <?php echo lang('Installation') ?>
                                <span><i class="fa fa-fw fa-magic"></i></span>
                                <small>// <?php echo lang('Create a new application') ?></small>
                            </h1>
                        </div>

                    </div>

                </div>

                <div class="module-body">

                    <div class="row">

                        <div class="col-xs-12 col-sm-12">

                            <div class="line-steps"></div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-xs-4 col-sm-4 step-one">

                            <center>

                                <div class="step">
                                    1
                                    <h3 class="text-success" style="margin: -25px 0 0 30px"><i class="fa fa-fw fa-check-circle"></i></h3>
                                </div>

                                <div class="step-text"><?php echo lang('System requirements') ?></div>

                            </center>

                        </div>

                        <div class="col-xs-4 col-sm-4 step-two">

                            <center>

                                <div class="step">
                                    2
                                    <h3 class="text-success" style="margin: -25px 0 0 30px"><i class="fa fa-fw fa-check-circle"></i></h3>
                                </div>

                                <div class="step-text"><?php echo lang('New application info') ?></div>

                            </center>

                        </div>

                        <div class="col-xs-4 col-sm-4 step-three">

                            <center>

                                <div class="step done">3</div>

                                <div class="step-text done"><?php echo lang('Summary') ?></div>

                            </center>

                        </div>

                    </div>

                    <div class="row" style="margin-top: 50px">

                        <div class="col-sm-12 text-center">

                            <h3 class="text-success">
                                <span><?php echo lang('ACME Framework successfully installed') ?></span>
                                <i class="fa fa-fw fa-check-circle"></i>
                            </h3>

                            <h4 style="margin-top: 30px"><?php echo lang('Application') ?> <strong><?php echo APP_NAME ?></strong> <?php echo lang('created with no errors.') ?></h4>

                            <a href="<?php echo URL_ROOT ?>" class="btn btn-lg btn-success" style="margin-top: 30px">
                                <?php echo lang('Go to login page') ?>
                                <i class="fa fa-fw fa-arrow-circle-right"></i>
                            </a>

                            <div style="margin: 20px 0 15px" class="text-muted"><?php echo lang('or') ?></div>

                            <a href="http://www.acmeengine.org/docs" target="_blank">
                                <?php echo lang('Read ACME Framework docs') ?>
                                <i class="fa fa-fw fa-external-link"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </section>

        </div>

    </div>

    <style type="text/css">

        .content-wrapper, .right-side, .main-footer { margin-left: 0; }

        .form-group {
            margin-bottom: 20px
        }

        h3.text-success {
            color: #8CC152;
        }

        .list-group-item-heading {
            font-size: 16px;
            margin: 2px 0 4px 0px;
        }

        .list-group-item h3 {
            font-size: 22px;
            margin: -3px 3px 0 0;
        }

        .list-group-item h3 i {
            margin: 0 0 0 -9px;
        }

        .list-group-item-text {
            margin-left: 22px;
        }

        .line-steps {
            height: 7px;
            background-color: #e8e8e8;
            width: 100%;
            margin: 30px 0 0 0;
        }

        .step {
            line-height: 60px;
            vertical-align: middle;
            text-align: center;
            height: 60px;
            width: 60px;
            background-color: #e8e8e8;
            border-radius: 100%;
            color: #999;
            font-size: 20px;
            font-weight: bold;
            margin-top: -34px;
        }

        .step.done {
            color: #fff;
            background-color: #A0D468
        }

        .step-text {
            margin: 10px 0 0 0;
            color: #999;
            font-size: 20px
        }

        .step-text.done {
            color: inherit;
            font-weight: bold;
        }

        /* Large desktops */
        @media(min-width: 1170px) {
            .step-one {
                padding-right: 130px;
            }

            .step-three {
                padding-left: 130px;
            }
        }

        /* Large desktops */
        @media(min-width: 1170px) {
            .step-one {
                padding-right: 130px;
            }

            .step-three {
                padding-left: 130px;
            }
        }

    </style>

    <script type="text/javascript">

        // ========
        // Tooltips
        // ========
        $('i[data-toggle="tooltip"]').tooltip({
            container : 'body'
        });

        // ==================================
        // Change action and return to step 1
        // ==================================
        $('.back-step').on('click', function () {

            $("form").validationEngine('detach');

            $(this).closest('form').attr('action', $('#URL_ROOT').val() + '/app-installer/system-requirements').submit();

        });

        // ============================
        // Set validations to all forms
        // ============================
        $('form').validationEngine('attach', {

            promptPosition : "bottomRight",
            onValidationComplete: function (form, status) {
                if( ! status )
                    return false;

                $.enable_loading();
                return true;
            }
        });

        // ===============================
        // Reposition the alerts from form
        // ===============================
        $( window ).resize( function () {
            $("form").validationEngine('updatePromptsPosition');
        });

        // =================
        // Language callback
        // =================
        $('a.change-language').on('click', function () {

            $.change_language_custom($(this).attr('id'));
        });

        // ======================
        // Custom change language
        // ======================
        $.change_language_custom = function (language) {

            $.enable_loading();

            $.ajax({
                url: $('#URL_ROOT').val() + '/app-installer/change-language/' + language,
                context: document.body,
                dataType : 'json',
                cache: false,
                type: 'POST',
                complete : function (data) {

                    window.location.reload();

                }
            });
        };

    </script>

</body>

</html>
