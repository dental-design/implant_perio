<?php

// check page for content builder acf group. If it exists, run a foreach loop that will find each content builder block based on the name (names must be the same in the back end or this won't work)
$sections = get_field('sections');

if ($sections) :
    foreach ($sections as $section) :

        $template = str_replace( '_', '-', $section['acf_fc_layout'] );
        get_template_part( 'content-builder/sections/_' . $template, '', $section );

    endforeach;
endif;