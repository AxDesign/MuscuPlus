<script>
    var ctx = document.getElementById('graph1').getContext('2d');
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
                    data: [<?=$semaine[$bar['name']][1]?>, <?=$semaine[$bar['name']][2]?>, <?=$semaine[$bar['name']][3]?>, <?=$semaine[$bar['name']][4]?>, <?=$semaine[$bar['name']][5]?>, <?=$semaine[$bar['name']][6]?>, <?=$semaine[$bar['name']][0]?>],
                },
                <?php } ?>
            ]
        },

        // Configuration options go here
        options: {}
    });
</script>