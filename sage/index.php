<!doctype html>
<html <?php language_attributes(); ?> class="h-full  text-base antialiased">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
	  <link href="https://fonts.cdnfonts.com/css/helvetica-neue-55" rel="stylesheet">
	  <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js"></script>
	  <?php wp_head(); ?>
  </head>

  <body <?php body_class('flex min-h-full flex-col bg-neutral-950'); ?>
    x-data="{ openMenu: false }"
  >
    <?php wp_body_open(); ?>

	    <?php do_action('get_header'); ?>
	    <?php echo view(app('sage.view'), app('sage.data'))->render(); ?>
	    <?php do_action('get_footer'); ?>
	    <?php wp_footer(); ?>


  </body>
</html>
