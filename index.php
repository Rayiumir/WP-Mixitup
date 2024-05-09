<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolios or Gallary and MixitupJS At Wordpress</title>
    <?php wp_head() ?>
</head>
<body>
    <div class="title mt-3 text-center">
        <h1 class="fs-3">Portfolios</h1>
    </div>
    
    <section class="portfolio mt-4 mb-4">
        <div class="text-center">
            <button type="button" class="btn btn-danger btnr" data-filter=".all">all</button>
            <?php
                $terms = get_terms([
                    'taxonomy' => 'CategoryPortfolio'
                ]);

                foreach($terms as $row){
            ?>
            <button type="button" class="btn btn-danger btnr" data-filter=".<?php echo $row->slug; ?>"><?php echo $row->name; ?></button>
            <?php } ?>
        </div>
    
        <div class="filter">
            <div class="row mt-4">
                <?php
                    $portfolio = new WP_Query(
                        array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => 12
                        )
                    );

                    if($portfolio->have_posts()){
                        while($portfolio->have_posts()){
                            $portfolio->the_post();
                            $terms = get_the_terms(get_the_ID(), 'CategoryPortfolio');
                            $terms = join(', ', wp_list_pluck($terms, 'slug'));
                ?>
                <div class="col-6 col-md-3 mb-3 mix <?php echo $terms; ?>" id="caption">
                    <span class ="text text-center">
                        <i class="fa-solid fa-eye fa-2x"></i>
                        <h4><?php the_title() ?></h4>
                    </span>
                    <figure class="imgport">
                        <?php echo the_post_thumbnail('full', ['class' => 'img-fluid']) ?>
                    </figure>
                </div>
                <?php   }
                    }
                ?>
            </div>
        </div>
    </section>
</body>
</html>
