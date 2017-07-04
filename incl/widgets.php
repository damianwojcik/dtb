<?php

    if (function_exists( 'register_sidebar' )) {

        register_sidebar(array(
            'name' => 'Panel wyszukiwania',
            'id'  => 'search_panel',
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget'  => '',
        ));

    }

?>