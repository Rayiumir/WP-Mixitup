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
            <?php
            $all_categories = get_categories(array(
                'hide_empty' => true
            ));
            ?>
            <?php foreach($all_categories as $category): ?>
                <button type="button" class="btn btn-danger btnr" data-filter=".<?php echo $category->slug; ?>"><?php echo $category->name; ?></button>
            <?php endforeach; ?>
        </div>
    
        <div class="filter">
            <div class="row mt-4">
                <?php
                    $args = array(
                        'post_type' => array('portfolios'),
                    );
    
                    $query = new WP_Query($args);
    
                    if ($query->have_posts()){
                        while ($query->have_posts()){
                            $query->the_post();
                            $categories = get_the_category();
                            $slugs = wp_list_pluck($categories, 'slug');
                            $class_names = join(' ', $slugs);
                ?>
                <div class="col-6 col-md-3 mb-3 mix<?php if ($class_names) { echo ' ' . $class_names;} ?>" id="caption">
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
