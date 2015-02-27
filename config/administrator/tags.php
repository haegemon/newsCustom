<?php
/**
 * Created by PhpStorm.
 * User: pawel
 * Date: 27.02.15
 * Time: 17:53
 */

return array(
    'title' => 'Tags',
    'single' => 'tag',
    'model' => 'App\Tag',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'title',
        'is_published',
    ),
    /**
     * The filter set
     */
    'filters' => array(
        'id',
        'title',
        'is_published',
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'title' => array(
            'title' => 'Title',
            'type' => 'text',
        ),
        'is_published' => array(
            'title' => 'Is published',
            'type' => 'bool',
        ),
    ),
);