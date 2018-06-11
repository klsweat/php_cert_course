<?php

/* LAB 1*/
// An astronaut array assignment
$astronaut = ['firstName' => 'Mark', 'Watney', 5 => 'Botanist'];
// Access the last name value
echo $astronaut[0]. '
';

echo PHP_EOL;

/* LAB 2*/

// An astronaut array assignment
$astronaut = ['firstName' => 'Mark', 6 => 'Watney', 5 => 'Botanist', 'STS395'];

// Access the last element value
echo $astronaut[7] . '
';

echo PHP_EOL;

/* LAB 3*/
// Build the crew
$astronaut1 = ['firstName' => 'Mark', 'lastName' => 'Watney',
'specialty' => 'Botanist'];
$astronaut2 = ['firstName' => 'Melissa', 'lastName' => 'Lewis',
'specialty' => 'Commander'];
$astronaut3 = ['firstName' => 'Beth', 'lastName' => 'Johanssen',
'specialty' => 'Computer Specialist'];
$mission = ['STS395' => [$astronaut1, $astronaut2, $astronaut3]];

// Access the Computer Specialist's first name
echo $mission['STS395'][2]['firstName'];

echo PHP_EOL;
echo PHP_EOL;

/* LAB 4*/
$config = [
	'router' => [
		'routes' => [
			'market' => [
				'type' => 'literal',
				'options' => [
					'route' => '/market',
					'defaults' => [
						'controller' => 'IndexController',
						'action' => 'index',
						],
					],
				],
			],
		],
	];

echo $config['router']['routes']['market']['options']['defaults']['action'];

echo PHP_EOL;
echo PHP_EOL;

// Build the crew
$astronaut1 = ['firstName' => 'Mark', 'lastName' => 'Watney', 'specialty' => 'Botanist'];
$astronaut2 = ['firstName' => 'Melissa', 'lastName' => 'Lewis', 'specialty' => 'Director'];
$astronaut3 = ['firstName' => 'Beth', 'lastName' => 'Johanssen', 'specialty' => 'Computer Specialist'];
$astronaut4 = ['firstName' => 'Kandace', 'lastName' => 'Sweat', 'specialty' => 'Computer Analyst'];

$string_ASTRO = $astronaut4['firstName'];
$career = $astronaut2['specialty'];
echo "$string_ASTRO wants to be a $career one day.";
echo PHP_EOL;
/*  OR  */
echo PHP_EOL;
echo "{$astronaut4['firstName']} {$astronaut4['lastName']} wants to be a {$astronaut1['specialty']} when she grows up.";


echo PHP_EOL;




