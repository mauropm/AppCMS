      <div id="node<?php echo $node->nid; ?>" class="s-pane">
        <div class="toolbar">
          <h1><?php if($title) { echo $title; } ?></h1>
          <?php // If this page has a parent that isn't level 1, draw a back button
							if (appcms_menu_depth() != 1) {?>          <a href="<?php print base_path(); ?>" class="back">Back</a><?php	}; ?>
        </div>
        <section id="content-<?php echo $node->nid; ?>" class="s-scrollwrapper">
          <div id="contentpane-<?php echo $node->nid; ?>" class="s-scrollpane">
	<?php print_r($fields); ?>
              <?php if($content) { echo $content; } ?>
            <nav>
              <?php if($block_area) { echo $block_area; } ?>
            </nav>
          </div>
        </section>
      </div>
    </div>
<script type="text/javascript" charset="utf-8">
$(function(){
	if($('#node<?php echo $node->nid; ?>').height() > ($('#jqt').height() - 49)) {
	  jQT.init_iScroll($('#node<?php echo $node->nid; ?>'));
	}
});
</script>