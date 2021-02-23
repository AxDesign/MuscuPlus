<script>
    var ctx = document.getElementById('statTime').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'],
            datasets: [
                
                <?php
                foreach($activityList as $bar){
                ?>
                {
                    label: '<?=$bar['name']?>',
                    data: [<?=$time[$bar['name']][1]?>, <?=$time[$bar['name']][2]?>, <?=$time[$bar['name']][3]?>, <?=$time[$bar['name']][4]?>, <?=$time[$bar['name']][5]?>, <?=$time[$bar['name']][6]?>, <?=$time[$bar['name']][0]?>],
                    backgroundColor: [
                        <?php
                        for($i=0;$i<=7;$i++){
                        ?>
                        'rgba(<?=$bar['colorRed']?>,<?=$bar['colorGreen']?>,<?=$bar['colorBlue']?>, 0.2)',
                        <?php } ?>
                    ],
                    borderColor: [
                        <?php
                        for($i=0;$i<=7;$i++){
                        ?>
                        'rgba(<?=$bar['colorRed']?>,<?=$bar['colorGreen']?>,<?=$bar['colorBlue']?>, 1)',
                        <?php } ?>
                    ],
                    borderWidth: 1
                },
                <?php } ?>
            ]
        },

        // Configuration options go here
        options: {}
    });

    var ctx = document.getElementById('statTimeDist').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'],
            datasets: [
                
                <?php
                foreach($activityList as $bar){
                ?>
                {
                    label: '<?=$bar['name']?>',
                    data: [<?=$distance[$bar['name']][1]?>, <?=$distance[$bar['name']][2]?>, <?=$distance[$bar['name']][3]?>, <?=$distance[$bar['name']][4]?>, <?=$distance[$bar['name']][5]?>, <?=$distance[$bar['name']][6]?>, <?=$distance[$bar['name']][0]?>],
                    backgroundColor: [
                        <?php
                        for($i=0;$i<=7;$i++){
                        ?>
                        'rgba(<?=$bar['colorRed']?>,<?=$bar['colorGreen']?>,<?=$bar['colorBlue']?>, 0.2)',
                        <?php } ?>
                    ],
                    borderColor: [
                        <?php
                        for($i=0;$i<=7;$i++){
                        ?>
                        'rgba(<?=$bar['colorRed']?>,<?=$bar['colorGreen']?>,<?=$bar['colorBlue']?>, 1)',
                        <?php } ?>
                    ],
                    borderWidth: 1
                },
                <?php } ?>
                <?php
                foreach($activityList as $bar){
                ?>
                {
                    type : 'line',
                    label: '<?=$bar['name']?>',
                    data: [<?=$time[$bar['name']][1]?>, <?=$time[$bar['name']][2]?>, <?=$time[$bar['name']][3]?>, <?=$time[$bar['name']][4]?>, <?=$time[$bar['name']][5]?>, <?=$time[$bar['name']][6]?>, <?=$time[$bar['name']][0]?>],
                    borderColor: [
                        <?php
                        for($i=0;$i<=7;$i++){
                        ?>
                        'rgba(<?=$bar['colorRed']?>,<?=$bar['colorGreen']?>,<?=$bar['colorBlue']?>, 1)',
                        <?php } ?>
                    ],
                    borderWidth : 2
                },
                <?php } ?>
            ]
        },

        // Configuration options go here
        options: {}
    });
    
    var ctx = document.getElementById('statRep').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'],
            datasets: [
                
                <?php
                foreach($activityList as $bar){
                ?>
                {
                    label: '<?=$bar['name']?>',
                    data: [<?=$repetitions[$bar['name']][1]?>, <?=$repetitions[$bar['name']][2]?>, <?=$repetitions[$bar['name']][3]?>, <?=$repetitions[$bar['name']][4]?>, <?=$repetitions[$bar['name']][5]?>, <?=$repetitions[$bar['name']][6]?>, <?=$repetitions[$bar['name']][0]?>],
                    backgroundColor: [
                        <?php
                        for($i=0;$i<=7;$i++){
                        ?>
                        'rgba(<?=$bar['colorRed']?>,<?=$bar['colorGreen']?>,<?=$bar['colorBlue']?>, 0.2)',
                        <?php } ?>
                    ],
                    borderColor: [
                        <?php
                        for($i=0;$i<=7;$i++){
                        ?>
                        'rgba(<?=$bar['colorRed']?>,<?=$bar['colorGreen']?>,<?=$bar['colorBlue']?>, 1)',
                        <?php } ?>
                    ],
                    borderWidth: 1
                },
                <?php } ?>
            ]
        },

        // Configuration options go here
        options: {}
    });
</script>