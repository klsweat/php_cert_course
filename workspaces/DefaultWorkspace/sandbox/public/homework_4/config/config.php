<?php
// The forms configuration array
$configArray = [
    'forms' => [
        'new_order' => [
            'name' => 'addorder',
            'id' => 'addorder',
            'action' => 'index.php',
            'method' => 'post',
            'layout' => 'vertical',
            'elements' => [
                1 => [
                    'label' => 'Amount:',
                    'type' => 'text',
                    'name' => 'amount',
                    'class' => '',
                    'id' => '',
                    'size' => 6
                ],
                2 => [
                    'label' => 'Description:',
                    'type' => 'textarea',
                    'name' => 'description',
                    'class' => '',
                    'id' => '',
                    'cols' => 50,
                    'rows' => 4
                ],
 				3 => [
                    'label' => 'Select:',
                    'type' => 'select',
                    'name' => 'selectFromDropdown',
                    'class' => '',
                    'id' => '',                    
		    		'options' => [ 
			 			$values[] = [ 'value' => ' ', 'innerText' => '-- SELECT --'],			
			 			$values[] = [ 'value' => 'A', 'innerText' => 'A'],			
			 			$values[] = [ 'value' => 'B', 'innerText' => 'B'],			
			 			$values[] = [ 'value' => 'C', 'innerText' => 'C']			
                    ]
                ],
                4 => [
                    'type' => 'submit',
                    'class' => 'button',
                    'value' => 'Add Order'
                ],
            ],
        ],
    ],
];


