<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Article extends Controller_Main {
 
    protected $articleRepository;

    public function before()
    {
        parent::before();
        $this->articleRepository = new Repositories_ArticleRepository();
    }

    public function action_index() {
        $articles = $this->articleRepository->getAll();
    	$this->template->content = View::factory( 'article/index', [ 'articles' => $articles ] );
    }

   // loads the new article form
    public function action_new() {
        $article = ORM::factory( 'Article' );
        /*$article = $article->where( 'id', '=', 7 )
                            ->find();

        $article = ORM::factory( 'article', 7 );*/

        $this->template->content = View::factory( 'article/edit' )
                                        ->set( "article", $article );
    }

    public function action_edit()
    {
        //$article_id = $this->request->param( 'id' );

        $article_id = Request::current()->param( 'id' );

        $article = ORM::factory( 'Article', $article_id );

        $this->template->content = View::factory( 'article/edit' )
                                        ->set( "article", $article );
    }

    // save the article
    public function action_post() {
        $article_id = $this->request->param( 'id' );
        
        $article = new Model_Article($article_id);
        $article->values($_POST); // populate $article object from $_POST array
        $article->save(); // saves article to database
 
        $this->redirect('article'); // redirects to article page after saving
    }

    public function action_delete()
    {
        $article_id = $this->request->param( 'id' );
        $article = ORM::factory( 'article', $article_id );

        if( ! $article->loaded() )
            throw new exception( 'Wala naman sa record eh' );

        $article->delete();

        $this->redirect( URL::site( 'article' ) );
    }
 
}