<?php

class Repositories_ArticleRepository {
	
	public function getAll()
	{
		return ORM::factory( 'article' )
                        ->where( 'title', '!=', '' )
                        ->find_all();
	}

}