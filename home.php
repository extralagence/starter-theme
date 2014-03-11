<?php

add_filter('extra_template_content', function () { return 'modules/news/front/content-multiple'; });
add_filter('extra_template_sidebar', function () { return 'modules/news/front/sidebar'; });

get_template_part('page-column-right');