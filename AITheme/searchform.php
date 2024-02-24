<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-group">
        <input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'textdomain' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
        <div class="input-group-append">
            <button type="submit" class="btn btn-primary"><?php echo esc_html_x( 'Search', 'submit button', 'textdomain' ); ?></button>
        </div>
    </div>
</form>
