<?php
$post = get_post();
$field_name = isset($attributes['fieldName']) ? $attributes['fieldName'] : null;
$field_value = get_post_meta($post->ID, $field_name, true);
if (!$field_name) {
    return '';
}
?>

<p><?php echo ($field_value) ?></p>