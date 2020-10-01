<div class="MainTextBody"><br>
    <h4><font color="red">»</font> Изученные рынки</h4>



    <a name="#p1"></a>
    <b>Предлагаем Вам ознакомиться с  выполненными Институтом ИТКОР маркетинговыми исследованиями за 2005 – 2011 гг.</b>
    <br><br>


    <table width="100%" align="center">
        <tbody><tr valign="top">

            <?php
            $query = new WP_Query([
                'numberposts' => -1,
                'post_type' => 'list',
            ]);
            if ( $query->have_posts() ) :
            while ( $query->have_posts() ):
            $query->the_post();
            ?>

            <td width="25%" align="center"><img src="<?php echo get_field('market_image')['url']; ?>" alt="<?php echo get_field('market_image')['alt']; ?>" width="200" height="151" border="0">
                <a href="<?php the_permalink(); ?>"><br><?php echo the_title(); ?></a>
            </td>

            <?php
            endwhile;
            endif;
            ?>
            <!--
            <td align="center"  width=25%>
            <a href="http://itkor.ru/study/show.phtml?S_id=463"><img src="/storage/images/ban14.jpg" width="200" height="151" border="0" alt=""><br>"Транспортное обеспечение логистики",<br> практический курс<br>12-16 сентября</a>
            -->


        </tr>
        </tbody></table>

</div>