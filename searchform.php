<form action="/" method="get" class="container">
    <button class="close" type="button"><i class="fas fa-times"></i></button>
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Veuillez saisir votre recherche" />
    <button type="submit"><i class="fas fa-search"></i></button>
</form>