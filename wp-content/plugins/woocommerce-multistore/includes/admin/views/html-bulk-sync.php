<?php

defined( 'ABSPATH' ) || exit;

if( is_multisite() ){
	switch_to_blog( (int) get_site_option('wc_multistore_master_store') );
}

$all_categories = get_categories(
	array(
		'taxonomy'   => 'product_cat',
		'hide_empty' => false,
	)
);
$attribute_taxonomies = wc_get_attribute_taxonomies();

if( is_multisite() ){
	restore_current_blog();
}
?>

<div class='woomulti-bulk-sync-page'>
	<h1> Sync all products in your network. </h1>

	<p> Normally, you would be using the regular sync page as that offers more control. However, when you are setting up the plugin for the first time, you may have a lot of products that you want to sync with your child sites. Or you may need to sync all product data again if you have added product data.
	</p>

	<form id='bulk-sync-form' action='#' method='POST'>
        <label class="wc-multistore-checkbox-label">
		    <input class='select-all-products' type='checkbox' name='select-all-products' checked='checked' value='1' />
            <span class="checkmark"></span>
        </label>
		<label> Select All Products </label> <br />
        <p> If you want a more advanced query, unselect Select All Products </p>

        <div class="wc-multistore-bulk-sync-advanced-container closed">
            <h2> Select Categories </h2>
            <select style="width:250px;" class="wc-multistore-select2 wc-enhanced-select" name="select_categories[]" multiple="multiple">
                <?php foreach ($all_categories as $cat): ?>
                    <option value='<?php echo $cat->term_id; ?>'><?php echo $cat->name . '('. $cat->count . ')'  ?></option>
                <?php endforeach; ?>
            </select>

            <?php if( ! empty( $attribute_taxonomies ) ): ?>
                <?php foreach ( $attribute_taxonomies as $attribute_taxonomy ): ?>
                    <?php $args = array(
                        'taxonomy'   => 'pa_'. wc_sanitize_taxonomy_name( $attribute_taxonomy->attribute_name),
                        'hide_empty' => false,
                    ); ?>
                    <?php $terms = get_terms($args); ?>

                    <h2>Select <?php echo $attribute_taxonomy->attribute_label; ?> attribute</h2>
                    <?php if( ! empty( $terms ) ): ?>
                        <select style="width:250px;" class="wc-multistore-select2 wc-enhanced-select" name="bulk_sync_pa_<?php echo $attribute_taxonomy->attribute_name; ?>[]" multiple="multiple">
                            <?php foreach ( $terms as $term ): ?>
                                <option value='<?php echo $term->term_id; ?>'><?php echo $term->name . '('. $term->count . ')'  ?></option>
                            <?php endforeach; ?>
                        </select>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

		<h2> Select Child Sites </h2>
		<p> Select all the sites you want to sync with. </p>
		<?php
        $sites = WOO_MULTISTORE()->active_sites;
        ?>

        <div class="woonet-checkbox-list">
            <label class="wc-multistore-checkbox-label">
                <input type='checkbox' class='select-all' value='' />
                <span class="checkmark"></span>
            </label>
            <label> Select/Deselect All </label> <br />
            <?php
            foreach ( $sites as $site ) {
                ?>
                <label class="wc-multistore-checkbox-label">
                    <input type='checkbox' class='select-child-sites child-sites-id-<?php echo $site->get_id(); ?>' name='select_child_sites[]' value='<?php echo $site->get_id(); ?>' />
                    <span class="checkmark"></span>
                </label>
                <label> <?php echo $site->get_url(); ?> </label> <br />
                <?php
            } ?>
        </div>


		<h2> Sync Settings </h2>
		<p> Select stock and sync settings. </p>
		<?php
		$sync_options = array(
			'child-sync' => array(
				'label' => 'Child product inherit Parent products changes',
				'value' => 'yes',
			),

			'stock-sync' => array(
				'label' => 'If checked, any stock change will syncronize across product tree',
				'value' => 'yes',
			),
		);

		foreach ( $sync_options as $key => $value ) {
			?>
            <label class="wc-multistore-checkbox-label">
			    <input checked='checked' type='checkbox' class='select-sync-settings <?php echo $key; ?>' name='<?php echo $key; ?>' value='<?php echo $value['value']; ?>' />
                <span class="checkmark"></span>
            </label>
			<label> <?php echo $value['label']; ?> </label> <br />
			<?php
		}
		?>


		<div class='sync-progress' style='display: none;'>
			<img src='<?php echo WOO_MSTORE_ASSET_URL . '/assets/images/ajax-loader.gif'; ?>' alt='Loader Image'/>
			<p style='display:block;'> <span style='display:block;'> Sync in progress </span> </p>
		</div>
		<?php if ( ! empty( $_REQUEST['queue_id'] ) ) : ?>
			<input type='hidden' id='start-sync-operation' name='start-sync-operation' value='1' />
		<?php endif; ?>
		<button type='button' id='bulk-sync-button' class='button-primary'> Sync Selected Products </button>
		<button type='button' data-attr='<?php echo network_admin_url() . 'admin.php?page=woonet-bulk-sync-products'; ?>' style='display:none;' id='bulk-sync-reload' class='button-primary'> Complete Sync </button>
		<button type='button' data-attr='<?php echo network_admin_url() . 'admin.php?page=woonet-bulk-sync-products'; ?>' id='bulk-sync-cancel-button' class='button-primary' style="visibility: hidden;"> Cancel </button>
	</form>
</div>
