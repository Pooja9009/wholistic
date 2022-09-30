<ul class="list" style="display: flex;
            flex-wrap: wrap;     justify-content: space-evenly;
            padding: 0px 50px 0px 50px;">


            <div class="live_search" id="ajax" style="width: 300px; ">
                <img class="hover-img" src="<?php bloginfo("template_directory"); ?>/img/productHover.jpg">
                <img class="product-img" src="<?php bloginfo("template_directory"); ?>/img/B12product.png"/>
                <div class="star-icon">
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star-o"></span>
                    <span class="review"><?php the_field('reviews'); ?> Reviews</span>
                </div>
                <h2><?php the_title(); ?></h2>
                <p class="product-text"><?php the_field('content'); ?></p>
            </div>

    </ul>

