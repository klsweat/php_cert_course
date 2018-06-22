<?php
return [
    'forms' => [
        'add_item' => [
            'name' => 'addChecklistItem',
            'id' => 'addChecklistItem',
            'class' => '',
            'action' => 'process.php',
            'method' => 'post',
            'layout' => 'vertical',
            'elements' => [
                1 => [
                    'label' => 'Username:',
                    'type' => 'text',
                    'name' => 'username',
                    'class' => '',
                    'id' => 'username',
                    'size' => 50
                ],
                2 => [
                    'label' => 'Password:',
                    'type' => 'password',
                    'name' => 'password',
                    'class' => '',
                    'id' => 'password',
                    'size' => 50
                ],
                3 => [
                    'label' => 'Email:',
                    'type' => 'email',
                    'name' => 'email',
                    'class' => '',
                    'id' => 'email',
                    'size' => 50
                ],		
		4 => [
                    'type' => 'submit',
                    'class' => 'button',
                    'id' => 'submit',
                    'value' => 'Submit'
                ],
            ],
        ],
    ],
];


