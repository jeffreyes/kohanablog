<?php

class Model_User extends ORM {
	
	protected $_has_many = [
		'articles' => [
			'model' => 'article'
		]
	];

}