<?php
/**
 * Created by PhpStorm.
 * User: phi314
 * Date: 3/21/15
 * Time: 2:47 AM
 */

$base_validation = 'required|trim|xss_clean';
$loose_validation = 'trim|xss_clean';

$config = [
    'login'     => [
        [
            'field'     => 'username',
            'label'     => 'Username',
            'rules'     => $base_validation
        ]

    ],
    'category/insert' => [
        [
            'field'     => 'code',
            'label'     => 'Kode',
            'rules'     => $base_validation.'|max_length[10]'
        ],
        [
            'field'     => 'name',
            'label'     => 'Nama',
            'rules'     => $base_validation.'|max_length[20]'
        ]
    ],
    'supplier/insert'   => [
        [
            'field'     => 'name',
            'label'     => lang('base_name'),
            'rules'     => $base_validation.'|max_length[50]'
        ],
        [
            'field'     => 'address',
            'label'     => lang('base_address'),
            'rules'     => $loose_validation.'|max_length[50]'
        ],
        [
            'field'     => 'phone',
            'label'     => lang('base_phone'),
            'rules'     => $loose_validation.'|max_length[15]|is_natural'
        ],
        [
            'field'     => 'email',
            'label'     => lang('base_email'),
            'rules'     => $loose_validation.'|max_length[50]|valid_email'
        ],
        [
            'field'     => 'city',
            'label'     => lang('base_city'),
            'rules'     => $loose_validation.'|max_length[30]'
        ],
        [
            'field'     => 'country',
            'label'     => lang('base_country'),
            'rules'     => $loose_validation.'|max_length[30]'
        ]
    ],
    'item/insert'   =>  [
        [
            'field'     => 'sku',
            'label'     => lang('base_sku'),
            'rules'     => $base_validation.'|max_length[50]'
        ],
        [
            'field'     => 'name',
            'label'     => lang('base_name'),
            'rules'     => $base_validation.'|max_length[100]'
        ],
        [
            'field'     => 'buy_price',
            'label'     => lang('base_buy_price'),
            'rules'     => $base_validation.'|integer'
        ],
        [
            'field'     => 'sell_price',
            'label'     => lang('base_sell_price'),
            'rules'     => $base_validation.'|integer'
        ],
        [
            'field'     => 'stock',
            'label'     => lang('base_stock'),
            'rules'     => $base_validation.'|integer'
        ],
        [
            'field'     => 'location',
            'label'     => lang('base_location'),
            'rules'     => $loose_validation.'|max_length[20]'
        ],
        [
            'field'     => 'color',
            'label'     => lang('base_color'),
            'rules'     => $loose_validation.'|max_length[30]'
        ],
        [
            'field'     => 'weight',
            'label'     => lang('base_weight'),
            'rules'     => $loose_validation.'|numeric'
        ],
        [
            'field'     => 'weight_unit',
            'label'     => lang('base_weight_unit'),
            'rules'     => $loose_validation.'|max_length[20]'
        ],
    ]
];