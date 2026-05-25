<?php
if (!defined('ABSPATH')) { exit; }
$options = happyhive_get_calculator_options();
?>
<div class="wrap happyhive-admin-wrap">
    <h1><?php esc_html_e('HappyHive Calculator Settings', 'happyhive-subsidy-calculator'); ?></h1>
    <form method="post" action="options.php">
        <?php settings_fields('happyhive_calculator_settings'); ?>
        <?php $opts = happyhive_get_calculator_options(); ?>
        <table class="form-table" role="presentation">
            <tbody>
                <tr>
                    <th scope="row"><label for="default_income"><?php esc_html_e('Default family income', 'happyhive-subsidy-calculator'); ?></label></th>
                    <td>
                        <input type="number" name="happyhive_calculator_options[default_income]" id="default_income" value="<?php echo isset($opts['default_income']) ? esc_attr($opts['default_income']) : 85000; ?>" />
                    </td>
                </tr>
                <tr>
                    <th scope="row"><?php esc_html_e('Enable email notifications', 'happyhive-subsidy-calculator'); ?></th>
                    <td>
                        <label>
                            <input type="checkbox" name="happyhive_calculator_options[enable_email_notifications]" value="1" <?php checked(!empty($opts['enable_email_notifications'])); ?> />
                            <?php esc_html_e('Send an email on calculation submit', 'happyhive-subsidy-calculator'); ?>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="email_recipient"><?php esc_html_e('Notification recipient email', 'happyhive-subsidy-calculator'); ?></label></th>
                    <td>
                        <input type="email" name="happyhive_calculator_options[email_recipient]" id="email_recipient" value="<?php echo isset($opts['email_recipient']) ? esc_attr($opts['email_recipient']) : esc_attr(get_option('admin_email')); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row"><?php esc_html_e('Show disclaimer', 'happyhive-subsidy-calculator'); ?></th>
                    <td>
                        <label>
                            <input type="checkbox" name="happyhive_calculator_options[show_disclaimer]" value="1" <?php checked(!empty($opts['show_disclaimer'])); ?> />
                            <?php esc_html_e('Display disclaimer box under results', 'happyhive-subsidy-calculator'); ?>
                        </label>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="disclaimer_text"><?php esc_html_e('Disclaimer text', 'happyhive-subsidy-calculator'); ?></label></th>
                    <td>
                        <textarea name="happyhive_calculator_options[disclaimer_text]" id="disclaimer_text" rows="4" class="large-text"><?php echo isset($opts['disclaimer_text']) ? esc_textarea($opts['disclaimer_text']) : esc_textarea(__('This is an estimate only. Actual subsidies may vary based on individual circumstances.', 'happyhive-subsidy-calculator')); ?></textarea>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php submit_button(); ?>
    </form>
</div>


