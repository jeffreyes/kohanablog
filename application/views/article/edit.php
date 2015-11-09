<?php defined('SYSPATH') or die('No direct script access.'); ?>

<link rel="stylesheet" href="<?php echo URL::site( 'css/bootstrap.css' ); ?>" />

<h1>Create new article</h1>
 
<div class="row">
        <div class="col-sm-8 blog-main">
            <?php //echo Form::open('article/post/' . $article->id ); ?>

            <form method="POST" action="<?php echo URL::site( 'article/post/' . $article->id );?>">

                <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title" type="text" placeholder="Title" id="title" class="form-control" value="<?php echo $article->title; ?>">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" name="content" id="content" cols="30" rows="10"><?php echo $article->content; ?></textarea>
                </div>
                <button class="btn btn-info" type="submit">Submit</button>
            </form>
        
        </div>
</div>