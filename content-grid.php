<div class="os-l-container">

    <style>
        .os-l-column {
            background: #ddd; 
            padding: 1.5em 0.5em; 
            margin-bottom: 1em; 
            font-size:14px; 
            line-height:1.1; 
            font-weight: bold; 
            text-align:center;
        }
    </style>

    <div class="os-l-row os-u-my-3">
        
        <?php

            $i = 1;
            $columns = 6;
            
            do { ?>
            
                <div class="<?php echo "os-l-column"; ?>"><?php echo ".os-l-column"; ?></div>

            <?php $i++;
            }
            
            while( $i <= $columns );

        ?>

    </div>

    <div class="os-l-row os-u-my-3">
        <div class="os-l-column os-l-span-4-lg" style="padding:1.5em 0">
            .os-l-span-4-lg
        </div>
        <div class="os-l-column os-l-span-8-lg" style="padding:1.5em 0">
            .os-span-8-lg
            <div class="os-l-row os-u-mt-1">
                <div class="os-l-column os-l-span-4-md os-l-span-6-lg" style="background:#bbb">.os-l-span-4-md.os-l-span-6-lg</div>
                <div class="os-l-column os-l-span-4-md os-l-span-6-lg" style="background:#bbb">.os-l-span-4-md.os-l-span-6-lg</div>
                <div class="os-l-column os-l-span-4-md os-l-span-6-lg" style="background:#bbb">.os-l-span-4-md.os-l-span-6-lg</div>
                <div class="os-l-column os-l-span-4-md os-l-span-6-lg" style="background:#bbb">.os-l-span-4-md.os-l-span-6-lg</div>
                <div class="os-l-column os-l-span-4-md os-l-span-6-lg" style="background:#bbb">.os-l-span-4-md.os-l-span-6-lg</div>
                <div class="os-l-column os-l-span-4-md os-l-span-6-lg" style="background:#bbb">.os-l-span-4-md.os-l-span-6-lg</div>
            </div>
        </div>
    </div>

    <div class="os-l-row os-u-my-3">

        <?php

            $i = 1;
            $columns = 12;

            do { ?>
            
                <div class='<?php echo "os-l-column os-l-span-{$i}"; ?>'><?php echo ".os-l-span-{$i}"; ?></div>
                
                <?php 
                $alt_i = $columns - $i;
                if ( $alt_i > 0 ) {
                    do { ?>

                        <div class='os-l-column os-l-span-1 os-l-span-1-sm os-l-span-1-md os-l-span-1-lg'>.os-l-span-1</div>

                    <?php $alt_i--; 
                    } 
                    
                    while( $alt_i > 0 );
                } ?>

            <?php $i++;
            }
            
            while( $i <= $columns );

        ?>

    </div>


</div>
