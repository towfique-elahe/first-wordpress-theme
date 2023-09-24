<div class="container">
    <header class="content-header">
        <div class="meta mb-3">
            <!-- post date -->
            <span class="date">
                <?php the_date() ?>
            </span>
            <!-- post tags -->
            <?php
                the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>');
            ?>
            <span class="tag"><i class='fa fa-tag'></i>
                <?php
                    $categories = get_the_category();
                    $separator = ', ';
                    $output = '';

                    if (!empty($categories)) {
                        foreach ($categories as $category) {
                            $output .= '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>' . $separator;
                        }

                        // Remove the trailing separator
                        $output = rtrim($output, $separator);

                        echo $output;
                    }
                ?>
            </span>

            <!-- post comment number -->
            <span class="comment">
                <a href="#comments">
                    <i class='fa fa-comment'></i>
                    <?php comments_number(); ?>
                </a>
            </span>
        </div>
    </header>

    <!-- post content -->
    <?php
        the_content();
    ?>

    <!-- comments -->
    <?php
        comments_template();
    ?>
</div>