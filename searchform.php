<form method="GET" action="<?= get_site_url(); ?>">
    <input class="search_input" type="text" name="s" placeholder="Didgite algum termo" value="<?php the_search_query(); ?>" />
    <input class="search_submit" type="submit" value="Pesquisar" />
</form>