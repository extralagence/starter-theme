<?php

add_filter('extra_template_content', function () { return 'modules/example/front/your/path/to/your/template/content'; });
add_filter('extra_template_sidebar', function () { return 'modules/example/front/your/path/to/your/template/sidebar'; });

get_template_part('page-column-right');