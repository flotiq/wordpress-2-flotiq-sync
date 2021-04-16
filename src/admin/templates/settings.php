<div class="wrap flotiq-admin">
    <h1><?php echo __('Flotiq Sync settings') ?></h1>
    <?php if (array_key_exists('saved', $_REQUEST) && $_REQUEST['saved']) { ?>
        <div id="setting-error-settings_updated" class="updated settings-error notice is-dismissible">
            <p><strong><?php echo __('The settings are saved') ?>.</strong></p>
        </div>
    <?php } ?>


    <div class="container-settings">
        <div class="module">
            <h2><?php echo __('Connect to Flotiq') ?></h2>

            <p>
                <?php echo __('<strong>To enable synchronization to Flotiq provide Read And Write API key.</strong>
                Data will be synchronized automatically after actions like create, update, publish, or delete.
                Check how to get your Flotiq API Key in the <a href="https://flotiq.com/docs/API/" target="_blank">docs</a>.') ?>
            </p>


            <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                <label for="flotiq_api_key">
                    <?php echo __('Flotiq Read and Write API Key') ?>
                </label>
                <div class="control-box">
                    <input type="text" id="flotiq_api_key" class="regular-text code" name="flotiq_api_key"
                           placeholder="<?php echo __('Your Flotiq RW API Key') ?>"
                           value="<?php echo esc_attr(get_option('flotiq_api_key')); ?>"/>
                    <a href="https://flotiq.com/docs/API/" target="_blank">
                        <svg height="18px" id="Capa_1" style="enable-background:new 0 0 91.999 92;" version="1.1"
                            viewBox="0 0 91.999 92" width="18px" xml:space="preserve"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path d="M45.385,0.004C19.982,0.344-0.334,21.215,0.004,46.619c0.34,25.393,21.209,45.715,46.611,45.377  c25.398-0.342,45.718-21.213,45.38-46.615C91.655,19.986,70.785-0.335,45.385,0.004z M45.249,74l-0.254-0.004  c-3.912-0.116-6.67-2.998-6.559-6.852c0.109-3.788,2.934-6.538,6.717-6.538l0.227,0.004c4.021,0.119,6.748,2.972,6.635,6.937  C51.903,71.346,49.122,74,45.249,74z M61.704,41.341c-0.92,1.307-2.943,2.93-5.492,4.916l-2.807,1.938  c-1.541,1.198-2.471,2.325-2.82,3.434c-0.275,0.873-0.41,1.104-0.434,2.88l-0.004,0.451H39.429l0.031-0.907  c0.131-3.728,0.223-5.921,1.768-7.733c2.424-2.846,7.771-6.289,7.998-6.435c0.766-0.577,1.412-1.234,1.893-1.936  c1.125-1.551,1.623-2.772,1.623-3.972c0-1.665-0.494-3.205-1.471-4.576c-0.939-1.323-2.723-1.993-5.303-1.993  c-2.559,0-4.311,0.812-5.359,2.478c-1.078,1.713-1.623,3.512-1.623,5.35v0.457H27.935l0.02-0.477  c0.285-6.769,2.701-11.643,7.178-14.487C37.946,18.918,41.446,18,45.53,18c5.346,0,9.859,1.299,13.412,3.861  c3.6,2.596,5.426,6.484,5.426,11.556C64.368,36.254,63.472,38.919,61.704,41.341z"/>
                        </svg>
                    </a>
                </div>

                <input class="button button-primary" name="save" type="submit"
                       value="<?php echo __('Save') ?>"/>
                <input type="hidden" name="action" value="save"/>
            </form>
        </div>


        <div class="module">
            <h2><?php echo __('Run synchronization') ?></h2>
            <p>
                <?php echo __('You can use this tool for initial synchronization. It will copy all your existing posts
                pages, media, tags, categories, and authors to your Flotiq account.') ?>
            </p>
            <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">

                <input class="button button-primary" type="submit" name="start-sync"
                       value="<?php echo __("Run synchronization"); ?>">
                <input type="hidden" name="action" value="start-sync"/>
            </form>
        </div>

        <div class="module">

            <h2><?php echo __('Flotiq Sync Plugin') ?></h2>

            <p>
                <strong>
                    <?php echo __('You can use this plugin to easily connect your WordPress instance to Flotiq and synchronize your data.
                    We support the following types of content: posts, pages, media, tags, categories, authors.'); ?>
                </strong>
            </p>

            <p style="margin-bottom: 0">
            <?php echo __('If you wish to talk with us about this project, feel free to hop on our') ?>
                <a href="https://discord.gg/FwXcHnX">
                    <?php echo __('Discord Chat') ?>
                </a>
            <?php echo __('If you found a bug, please report it in') ?>
                <a href="https://github.com/flotiq/wordpress-2-flotiq-sync/issues">
                    <?php echo __('issues') ?>
                </a>
            </p>

            <!--
            <a href="https://github.com/flotiq/wordpress-2-flotiq-sync">Source code on GitHub</a>
            -->
        </div>

        <div class="module">

            <img src="<?php echo plugin_dir_url(  __DIR__ ) . '../../assets/logo.svg' ?>"
                 width="200px">
            <p>
                <?php echo __('Learn more about Flotiq on <a  href="https://flotiq.com">Flotiq.com</a>
                                and in the <a href="https://flotiq.com/docs">Flotiq Docs</a>.'); ?>
            </p>

            <p style="margin-bottom: 0">
                <?php echo __('Remember you can easily use your WordPress data in the
                                <a href="https://flotiq.com/docs/Deep-Dives/Building-a-blog-in-3-minutes/">
                                Gatsby + Floiq integration</a> or setup one of the 
                                <a href="https://github.com/flotiq?q=gatsby-starter">Flotiq Gatsby Starters</a>.');?>
            </p>

        </div>
    </div>

</div>
