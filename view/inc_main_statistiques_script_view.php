<script>
    var ctx = document.getElementById('statTime').getContext('2d');
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
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: [<?=$time[$bar['name']][1]?>, <?=$time[$bar['name']][2]?>, <?=$time[$bar['name']][3]?>, <?=$time[$bar['name']][4]?>, <?=$time[$bar['name']][5]?>, <?=$time[$bar['name']][6]?>, <?=$time[$bar['name']][0]?>],
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
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: [<?=$repetitions[$bar['name']][1]?>, <?=$repetitions[$bar['name']][2]?>, <?=$repetitions[$bar['name']][3]?>, <?=$repetitions[$bar['name']][4]?>, <?=$repetitions[$bar['name']][5]?>, <?=$repetitions[$bar['name']][6]?>, <?=$repetitions[$bar['name']][0]?>],
                },
                <?php } ?>
            ]
        },

        // Configuration options go here
        options: {}
    });
</script>