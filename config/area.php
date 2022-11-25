<?php

return function () {
    return [
        'label' => t([
          'en' => 'Translations',
          'de' => 'Übersetzungen'
        ]),
        'icon'  => 'trevor',
        'menu'  => true,
        'views' => [
            [
                'pattern' => 'trevor',
                'action'  => function () {
                    return [
                        'component' => 'k-trevor-view',
                        'props' => [
                            'addKeys' => option('trevor.allow_add_keys', true),
                        ]
                    ];
                }
            ]
        ]
    ];
};
