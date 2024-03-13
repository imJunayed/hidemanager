<?php defined('ABSPATH') || die('Cheatin\' uh?'); ?>
<?php if(!isset($view)) return; ?>
<div id="hmwp_wrap" class="d-flex flex-row p-0 my-3">

    <div class="hmwp_row d-flex flex-row p-0 m-0">
        <div class="hmwp_col flex-grow-1 px-3 py-3 mr-2 mb-3 bg-white">
           <?php $view->show('blocks/Install') ?>
        </div>

        <div class="hmwp_col hmwp_col_side p-0 m-0 mr-2">
            <div class="card col-sm-12 m-0 p-0 rounded-0">
                <div class="card-body f-gray-dark text-left">
                    <h3 class="card-title"><?php echo esc_html__('2FA Logins', 'hide-my-wp'); ?></h3>
                    <div class="text-info"><?php echo sprintf(esc_html__("Add an extra layer of security to your online accounts by requiring both a password and a second verification method, such as a text message or app-generated code, to log in.", 'hide-my-wp'),  '<br><br>'); ?>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

