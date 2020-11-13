<div class="page-section mt5 mb5">

    <div class="expanding-section">
        <div class="expanding-section__head"
            style="background-image: url(<?php the_field('transfer_background_image'); ?>)">
            <div class="content">
                <img src="<?php the_field('transfer_icon'); ?>" />
                <h2 class="heading heading__4"><?php the_field('transfer_title'); ?></h2>
                <p class="button button__boxed expanding-section__trigger"><i class="fas fa-chevron-down"></i></p>

            </div>
        </div>
        <div class="expanding-section__body">
            <p class="button button__boxed expanding-section__close"><i class="fas fa-times"></i></p>
            <div class="content">
                <div class="container container__narrow40 text-block">
                    <?php the_field('transfers_title', 'options'); ?>
                </div>
                <div class="rental-table">
                    <?php if( have_rows('transfers_table', 'options') ): ?>

                    <?php while( have_rows('transfers_table', 'options') ): the_row(); ?>
                    <div class="transfer-rows">
                        <div class="tab-col"><?php the_sub_field('transfers_column_1');?></div>
                        <div class="tab-col"><?php the_sub_field('transfers_column_2');?></div>
                        <div class="tab-col"><?php the_sub_field('transfers_column_3');?></div>
                        <div class="tab-col"><?php the_sub_field('transfers_column_4');?></div>
                        <div class="tab-col"><?php the_sub_field('transfers_column_5');?></div>
                    </div>
                    <?php endwhile; ?>

                    <?php endif; ?>

                </div>

                <div class="rental-table">
                    <?php if( have_rows('private_transfers', 'options') ): ?>

                    <?php while( have_rows('private_transfers', 'options') ): the_row(); ?>
                    <?php the_sub_field('private_transfers_title'); ?>
                    <div class="private-rows">
                        <div class="tab-col"><?php the_sub_field('private_column_1');?></div>
                        <div class="tab-col"><?php the_sub_field('private_column_2');?></div>
                        <div class="tab-col"><?php the_sub_field('private_column_3');?></div>
                        <div class="tab-col"><?php the_sub_field('private_column_4');?></div>
                    </div>
                    <?php endwhile; ?>

                    <?php endif; ?>

                </div>

            </div>
        </div>
    </div>

    <div class="expanding-section">
        <div class="expanding-section__head"
            style="background-image: url(<?php the_field('lift_background_image'); ?>)">
            <div class="content">
                <img src="<?php the_field('lift_icon'); ?>" />
                <h2 class="heading heading__4"><?php the_field('lift_title'); ?></h2>
                <p class="button button__boxed expanding-section__trigger"><i class="fas fa-chevron-down"></i></p>

            </div>
        </div>
        <div class="expanding-section__body">
            <p class="button button__boxed expanding-section__close"><i class="fas fa-times"></i></p>
            <div class="content pricing">



                <?php if( have_rows('lift_pass_rates', 'options') ):
    while( have_rows('lift_pass_rates', 'options') ): the_row();?>
                <div class="container container__narrow40 text-block">
                    <?php the_sub_field('rates_intro_text');?>
                </div>

                <table class="rates">
                    <thead>
                        <tr>
                            <th class="tab-one"><?php the_sub_field('column_1_heading' , 'options');?></th>
                            <th class="tab-two"><?php the_sub_field('column_2_heading' , 'options');?></th>
                            <th class="tab-three"><?php the_sub_field('column_3_heading' , 'options');?></th>
                            <th class="tab-four"><?php the_sub_field('column_4_heading' , 'options');?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if( have_rows('rates_table' , 'options') ): ?>
                        <?php while( have_rows('rates_table' , 'options') ): the_row(); ?>
                        <tr>
                            <td class="tab-one"><?php the_sub_field('duration');?></td>
                            <td class="tab-two"><?php the_sub_field('adult_price');?></td>
                            <td class="tab-three"><?php the_sub_field('child_price');?></td>
                            <td class="tab-four"><?php the_sub_field('junior_senior_price');?></td>
                        </tr>
                        <?php endwhile; ?>

                    </tbody>
                </table>
                <?php endif; ?>
                <div class="container container__narrow40 text-block">
                    <?php the_sub_field('rates_footer_text');?>
                </div>

                <?php endwhile; endif;?>

            </div>
        </div>
    </div>

    <div class="expanding-section">
        <div class="expanding-section__head" style="background-image: url(<?php the_field('ski_background_image'); ?>)">
            <div class="content">
                <img src="<?php the_field('ski_icon'); ?>" />
                <h2 class="heading heading__4"><?php the_field('ski_title'); ?></h2>
                <p class="button button__boxed expanding-section__trigger"><i class="fas fa-chevron-down"></i></p>

            </div>
        </div>
        <div class="expanding-section__body">
            <p class="button button__boxed expanding-section__close"><i class="fas fa-times"></i></p>
            <div class="content">
                <div class="container container__narrow40 text-block">
                    <?php the_field('ski_hire_introduction', 'options'); ?>
                </div>


                <?php if( have_rows('rental_table', 'options') ): ?>
                <?php while( have_rows('rental_table', 'options') ): the_row();?>

                <?php the_sub_field('table_title'); ?>
                <div class="rental-table">
                    <?php if( have_rows('rental_columns', 'options') ): ?>

                    <?php while( have_rows('rental_columns', 'options') ): the_row(); ?>
                    <?php the_sub_field('table_title'); ?>
                    <div class="rental-rows">
                        <?php
$rentgroup = get_sub_field('rentcol1'); ?><div class="tab-col high<?php echo $rentgroup['high']; ?>">
                            <?php echo $rentgroup['contents']; ?></div>
                        <?php
$rentgroup = get_sub_field('rentcol2'); ?><div class="tab-col high<?php echo $rentgroup['high']; ?>">
                            <?php echo $rentgroup['contents']; ?></div>
                        <?php
$rentgroup = get_sub_field('rentcol3'); ?><div class="tab-col high<?php echo $rentgroup['high']; ?>">
                            <?php echo $rentgroup['contents']; ?></div>
                        <?php
$rentgroup = get_sub_field('rentcol4'); ?><div class="tab-col high<?php echo $rentgroup['high']; ?>">
                            <?php echo $rentgroup['contents']; ?></div>
                        <?php
$rentgroup = get_sub_field('rentcol5'); ?><div class="tab-col high<?php echo $rentgroup['high']; ?>">
                            <?php echo $rentgroup['contents']; ?></div>
                        <?php
$rentgroup = get_sub_field('rentcol6'); ?><div class="tab-col high<?php echo $rentgroup['high']; ?>">
                            <?php echo $rentgroup['contents']; ?></div>
                        <?php
$rentgroup = get_sub_field('rentcol7'); ?><div class="tab-col high<?php echo $rentgroup['high']; ?>">
                            <?php echo $rentgroup['contents']; ?></div>
                        <?php
$rentgroup = get_sub_field('rentcol8'); ?><div class="tab-col high<?php echo $rentgroup['high']; ?>">
                            <?php echo $rentgroup['contents']; ?></div>
                        <?php
$rentgroup = get_sub_field('rentcol9'); ?><div class="tab-col high<?php echo $rentgroup['high']; ?>">
                            <?php echo $rentgroup['contents']; ?></div>
                        <?php
$rentgroup = get_sub_field('rentcol10'); ?><div class="tab-col high<?php echo $rentgroup['high']; ?>">
                            <?php echo $rentgroup['contents']; ?></div>
                    </div>
                    <?php endwhile; ?>

                    <?php endif; ?>

                </div>
                <?php endwhile; ?>

                <?php endif; ?>







            </div>
        </div>
    </div>

    <div class="expanding-section">
        <div class="expanding-section__head"
            style="background-image: url(<?php the_field('school_background_image'); ?>)">
            <div class="content">
                <img src="<?php the_field('school_icon'); ?>" />
                <h2 class="heading heading__4"><?php the_field('school_title'); ?></h2>
                <p class="button button__boxed expanding-section__trigger"><i class="fas fa-chevron-down"></i></p>

            </div>
        </div>
        <div class="expanding-section__body">
            <p class="button button__boxed expanding-section__close"><i class="fas fa-times"></i></p>
            <div class="content">
                <div class="container container__narrow40 text-block">
                    <?php the_field('ski_school_introduction', 'options'); ?>
                </div>

                <?php if( have_rows('school_table', 'options') ): ?>
                <?php while( have_rows('school_table', 'options') ): the_row();?>

                <?php the_sub_field('table_title'); ?>
                <div class="rental-table">
                    <?php if( have_rows('school_columns') ): ?>

                    <?php while( have_rows('school_columns') ): the_row(); ?>
                    <?php the_sub_field('table_title'); ?>
                    <div class="school-rows">
                        <div class="tab-col"><?php the_sub_field('school_column_1');?></div>
                        <div class="tab-col"><?php the_sub_field('school_column_2');?></div>
                        <div class="tab-col"><?php the_sub_field('school_column_3');?></div>
                    </div>
                    <?php endwhile; ?>

                    <?php endif; ?>

                </div>
                <?php endwhile; ?>

                <?php endif; ?>

            </div>
        </div>
    </div>

</div>