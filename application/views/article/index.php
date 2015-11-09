<ul>
    <?php foreach( $articles as $article ) { ?>
        <li>
            <a href="<?php echo URL::site( 'article/edit/' . $article->id ); ?>">
                <?php echo $article->title; ?>
            </a>

            |

            <a href="<?php echo URL::site( 'article/delete/' . $article->id ); ?>">Delete</a>
        </li>
    <?php } ?>
</ul>

<a href="<?php echo URL::site( 'article/new' ); ?>" class="btn btn-danger">Create a new article</a>
