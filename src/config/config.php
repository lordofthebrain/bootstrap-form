<?php

use Watson\BootstrapForm\Type;

return [

    /*
    |--------------------------------------------------------------------------
    | Form type
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default form type for the open method. You have
    | the options of Type::HORIZONTAL, Type::VERTICAL and Type::INLINE.
    |
    */

    'type' => Type::VERTICAL,

    /*
    |--------------------------------------------------------------------------
    | Horizontal form default sizing
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default widths of the columns if you're using
    | the horizontal form type. You can use the Bootstrap grid classes as you
    | wish.
    |
    */

    'left_column_class'  => 'col-lg-3 col-form-label text-lg-right',
    'right_column_class' => 'col-lg-9',

    'left_column_offset_class' => 'offset-lg-3',
    /*
    |--------------------------------------------------------------------------
    | Error output
    |--------------------------------------------------------------------------
    |
    | Here you may specify the whether all the errors of an input should be
    | displayed or just the first one.
    |
     */

    'show_all_errors' => true,

    'error_class' => 'is-invalid',

    /*
    |--------------------------------------------------------------------------
    | Icon prefix
    |--------------------------------------------------------------------------
    |
    | Here you may specify the icon prefix, for instance fa fa- to Font Awesome . ~4, etc.
    |
    */

    'icon_prefix' => ''
];
