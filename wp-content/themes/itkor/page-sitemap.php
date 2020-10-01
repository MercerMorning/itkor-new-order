<?php get_header(); ?>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr valign="top">
        <td width="302">

        </td>

        <!-- Right column -->
        <td valign="top">
            <div class="MainTextBody"><br>
                <h4><?php the_title(); ?></h4>
                <br><br>
                <?php the_content(); ?>
            </div>
        </td>
    </tr>
</table>
<?php get_footer(); ?>

