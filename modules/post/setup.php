<?php
global $post_metabox;
$post_metabox = new ExtraMetaBox(array(
    'id' => '_post_metabox',
    'title' => __("Metabox", "extra"),
    'types' => array('post'),
    'hide_editor' => FALSE,
    'fields' => array(
        array(
            'type' => 'editor',
            'name' => 'unexemple'    
        ),
        array(
            'type' => 'tabs',
            'subfields' => array(
                array(
                    'type' => 'custom_editor',
                    'name' => 'test'
                )
            )
        )
    ),
));
?>