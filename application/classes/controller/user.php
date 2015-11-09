<?php

class Controller_User extends Controller {
	
	public function action_index()
	{
		
	}

	public function action_view()
	{
		$user_id = $this->request->param( 'id' );

		$user = ORM::factory( 'user', $user_id );

		$articles = $user->articles->find_all();

		echo "<h1>{$user->username}</h1>";

		foreach( $articles as $article )
		{
			echo "<ul>";
				echo "<li>{$article->title}</li>";
			echo "</ul>";
		}

		//$this->response->body( View::factory( 'user/view', [ 'user' => $user, 'articles' => $articles ] ) );
	}

}