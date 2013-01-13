<?php

return array(
    'directories' => array(
        path('app') . 'less' => path('public') . 'css',
        path('app') . 'less\home' => path('public') . 'css\home',
    ),
    'formatter' => 'compressed',
    'preserveComments' => false,
    'recompile' => false,
);