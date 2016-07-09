<div class="info-forfait row">

    <div class="info-forfait-box col">
        <i class="fa fa-moon-o" aria-hidden="true"></i><?php the_field('nbr_nuits'); ?> <span> nuits</span>
    </div>

    <div class="info-forfait-box col">

        <?php $transport = get_field('transport');

        // if Autobus -------------------------------------

        if ($transport == 'Autobus')
        { ?>
            <i class="fa fa-bus" aria-hidden="true"></i>
            <span>Par </span><?php the_field('transport');
        }

        // if Avion ---------------------------------------

        if ($transport == 'Avion')
        { ?>
            <i class="fa fa-plane" aria-hidden="true"></i>
            <span>Par </span><?php the_field('transport');
        }

        // if Train ---------------------------------------

        if ($transport == 'Train')
        { ?>
            <i class="fa fa-train" aria-hidden="true"></i>
            <span>Par </span><?php the_field('transport');
        } ?>

    </div>

    <div class="info-forfait-box col">
        <i class="fa fa-usd" aria-hidden="true"></i><?php the_field('prix'); ?> <span> $</span>
    </div>

</div>