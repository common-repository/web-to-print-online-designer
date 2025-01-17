<?php if (!defined('ABSPATH')) exit; // Exit if accessed directly  ?>
<?php do_action('woocommerce_email_header', $heading); ?>
<p><?php _e('Please review orders below:', $plugin_id); ?></p>
<?php if (is_array($orders)): ?>
    <ul>
    <?php foreach ($orders AS $order_id => $order_number): ?>
        <li><?php _e('View order', $plugin_id); ?>: <a href="<?php echo admin_url("post.php?post=$order_id&action=edit"); ?>"a<?php echo $order_number; ?></a></li>
    <?php endforeach; ?>
    </ul>
    <small><?php _e('Login is required to edit orders', $plugin_id); ?></small>
<?php else: ?>
    <?php _e('No orders found', $plugin_id); ?>
<?php endif; ?>
<?php do_action('woocommerce_email_footer'); ?>