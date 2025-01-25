<?php settings_errors(); ?>

<div class="wrap">
    <div id="poststuff">
        <div id="post-body" class="metabox-holder columns-1">
            <div id="normal-sortables" class="meta-box-sortables ui-sortable">
                <div id="postbox-container-2" class="postbox-container">
                    <form class="postbox acf-postbox" method="post" action="<?php echo $this->link; ?>">
                        <div class="postbox-header">
                            <h2 class="hndle ui-sortable-handle"><?php echo $this->text; ?></h2>
                        </div>
                        <div class="inside acf-fields -left">
                            <?php echo $this->wrapper( 'type',  'Pool Product', '', $this->option_post_type() ); ?>
                            <?php echo $this->wrapper( 'month', 'Post Month',   '', $this->option_month() ); ?>
                            <?php echo $this->wrapper( 'year',  'Post Year',    '', $this->option_year() ); ?>
                            <div id="major-publishing-actions">
                                <button type="submit" name="post_create" class="button button-primary button-large add-field">Generate Post</button>
                                <div style="display:inline-block;line-height:32px;font-weight:bold;">&emsp; -- OR -- &emsp;</div>
                                <button type="submit" name="post_export" class="button button-primary button-large add-field">Export Post</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    .media-upload-form .notice, .media-upload-form div.error, .wrap .notice, .wrap div.error, .wrap div.updated {
        margin: 5px !important;
    }
</style>
