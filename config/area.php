<?php

return function () {
    return [
        'label' => 'Trevor',
        'icon'  => 'trevor',
        'menu'  => true,
        'views' => [
            [
                'pattern' => 'trevor',
                'action'  => function () {
                    return [
                        'component' => 'k-trevor-view'
                    ];
                }
            ]
        ]
    ];
};
