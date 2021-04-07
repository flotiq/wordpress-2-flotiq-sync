<div class="wrap flotiq-admin">
    <h1><?php echo __('Wordpress 2 Flotiq Sync settings') ?></h1>
    <p>
        <a href="https://editor.flotiq.com/api-keys" target="_blank">
            <?php echo __('Get Flotiq API key') ?>
        </a>
    </p>
    <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
        <?php if (array_key_exists('saved', $_REQUEST) && $_REQUEST['saved']) { ?>
            <div id="setting-error-settings_updated" class="updated settings-error notice is-dismissible">
                <p><strong><?php echo __('The settings are saved') ?>.</strong></p>
            </div>
        <?php } ?>
        <div class="container-settings">
            <div class="col-settings">
                <div class="module">
                    <div class="control-box control-box--type-text">
                        <label for="flotiq_api_key">
                                <?php echo __('Api key') ?>
                        </label>
                        <input type="text" id="flotiq_api_key" class="regular-text code" name="flotiq_api_key"
                               placeholder="<?php echo __('key') ?>"
                               value="<?php echo esc_attr(get_option('flotiq_api_key')); ?>"/>
                    </div>
                </div>
                <p class="submit module--light">
                    <input class="button button-primary" name="save" type="submit"
                               value="<?php echo __('Save') ?>"/>
                    <input type="hidden" name="action" value="save"/>
                </p>
            </div>
        </div>
    </form>

    <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
        <p class="submit module--light">
            <input class="button button-primary" type="submit" name="start-sync"
                   value="<?php echo __("Run synchronization"); ?>">
            <input type="hidden" name="action" value="start-sync"/>
        </p>
    </form>
</div>
