<?php 
/**
 * @file views-view-summary.tpl.php
 * Default simple view template to display a list of summary lines
 *
 * @ingroup views_templates
 */
?>
<div class="item-list">
  <ul class="views-summary">
  <?php $all_active = ""; ?>
  <?php if (drupal_get_path_alias($_GET["q"]) == drupal_get_path_alias("portfolio-explorer")): ?>
    <?php $all_active = "active"; ?>
  <?php endif; ?>
  
  
  <li><a class="<?php print $all_active; ?>" href="<?php print base_path();?><?php print drupal_get_path_alias("portfolio-explorer");?>"><?php print t('All Items')?> (<?php print sencillo_get_node_count('portfolio_item'); ?>)</a></li>
  <?php foreach ($rows as $id => $row): ?>
    <li><a href="<?php print $row->url; ?>"<?php print !empty($row_classes[$id]) ? ' class="'. $row_classes[$id] .'"' : ''; ?>><?php print $row->link; ?>
      <?php if (!empty($options['count'])): ?>
        (<?php print $row->count?>)</a>
      <?php endif; ?>
    </li>
  <?php endforeach; ?>
  </ul>
</div>

