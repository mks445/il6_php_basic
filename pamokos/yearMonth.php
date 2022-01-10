<?php
for($years = 2015; $years < 2022; $years++){

    for($months = 1; $months <= 12; $months++){

        for($day = 1; $day <= 31; $day++){

            echo $years.' '.$months.' '.$day;

            echo '<br>';

            if ($months % 2==1);
            for($day = 1; $day <= 30; $day++){
                echo $years.' '.$months.' '.$day;
                echo '<br>';
            }



            }

    }

}
