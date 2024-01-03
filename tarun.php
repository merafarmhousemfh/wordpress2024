 <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-standard-wrapper">

                    <?php

                    if ($query_blog->have_posts()):
                        for ($i = 0; $i < $query_blog->post_count; $i++):
                            $query_blog->the_post();
                            $title = get_the_title();
                            $author = get_the_author();
                            $description = get_the_content();
                            $image_id = get_post_meta(get_the_ID(), 'featured', true);
                            $image = get_the_post_thumbnail_url(get_the_ID());
                            // $image = preg_replace('/(width|height)="\d*"\s/', '', $image);
                            // Your HTML for each blog post goes here
                            ?>

                            <div class="single-blog-post-three mb-30 wow fadeInUp">
                                <div class="post-thumbnail">
                                <img src=" <?php echo strip_tags($image); ?>" alt="Post Image"> 
                                </div>
                                <div class="entry-content">
                                    <h3 class="title"><a href="<?php the_permalink();?>">
                                            <?php echo $title; ?>
                                        </a></h3>
                                    <div class="author">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>\assets\images/favicon.ico"
                                            alt="Author Image">
                                        <h6><span>By</span><a href="">
                                                <?php echo $author ?>
                                            </a></h6>
                                    </div>
                                    <p>
                                        <?php echo $description ?>
                                    </p>
                                </div>
                            </div>
                            <?php
                        endfor;
                        wp_reset_postdata();
                    else: ?>
                        <div class="single-blog-post-three mb-30 wow fadeInUp d-flex justify-content-center">
                            <h5>No results</h5>
                        </div>
                        <?php
                    endif;
                    ?>

                 <ul class="gadden-pagination mb-40 wow fadeInUp text-center">
                        <li><a href="#"><i class="far fa-angle-double-left"></i></a></li>
                        <li><a href="#">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#">04</a></li>
                        <li><a href="#"><i class="far fa-angle-double-right"></i></a></li>
                    </ul> 
                </div>

            </div>