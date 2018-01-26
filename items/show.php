<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'items show')); ?>
<div id="primary">
    <h2><?php echo metadata('item', array('Dublin Core', 'Creator')) . ': ' . metadata('item', array('Dublin Core','Title')); ?></h2>


	<!-- plugin hook (place universal viewer here) -->
       <?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>

        <!-- The following prints a citation for this item. -->
    <div id="item-citation" class="element">
        <h4><?php echo __('Zitierempfehlung'); ?></h4>
	<div class="element-text"><?php echo mbc_citation($item); ?></div> <!-- custom citation format from custom.php -->
    </div>

    <!-- Items metadata -->
    <div class="element-text"> <!-- id="item-metadata"> -->
        <?php echo all_element_texts('item'); ?>
    </div>

	
	<?php /*
    <h4><?php echo __('Files'); ?></h4>
    <div id="item-images">
         <?php echo files_for_item(); ?>
    </div>
 */ ?>


   <?php if(metadata('item','Collection Name')): ?>
      <div id="collection" class="element">
        <h4><?php echo __('Collection'); ?></h4>
        <div class="element-text"><?php echo link_to_collection_for_item(); ?></div>
      </div>
   <?php endif; ?>
     <!-- The following prints a list of all tags associated with the item -->
    <?php if (metadata('item','has tags')): ?>
    <div id="item-tags" class="element">
        <h4><?php echo __('Tags'); ?></h4>
        <div class="element-text"><?php echo tag_string('item'); ?></div>
    </div>
    <?php endif;?>


    <ul class="item-pagination navigation">
        <li id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></li>
        <li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
    </ul>

</div> <!-- End of Primary. -->

 <?php echo foot(); ?>
