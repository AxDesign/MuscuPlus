<script>
    var ctx = document.getElementById('graph1').getContext('2d');
    var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'],
        datasets: [

                    <?php
                    foreach($activityList as $courbe){
                        
                    ?>
                    
                    {
                        label: '<?=$courbe['name']?>',
                        data: [<?=$semaine[$courbe['name']][1]?>, <?=$semaine[$courbe['name']][2]?>, <?=$semaine[$courbe['name']][3]?>, <?=$semaine[$courbe['name']][4]?>, <?=$semaine[$courbe['name']][5]?>, <?=$semaine[$courbe['name']][6]?>, <?=$semaine[$courbe['name']][0]?>],
                        backgroundColor: [
                            <?php
                            for($i=0;$i<=7;$i++){
                            ?>
                            'rgba(<?=$courbe['colorRed']?>,<?=$courbe['colorGreen']?>,<?=$courbe['colorBlue']?>, 0.2)',
                            <?php } ?>
                        ],
                        borderColor: [
                            <?php
                            global $red;
                            for($i=0;$i<=7;$i++){
                            ?>
                            'rgba(<?=$courbe['colorRed']?>,<?=$courbe['colorGreen']?>,<?=$courbe['colorBlue']?>, 1)',
                            <?php } ?>
                        ],
                        borderWidth: 1
                    },
                    <?php } ?>
                ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>