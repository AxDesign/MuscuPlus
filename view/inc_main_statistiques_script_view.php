<script>
    var ctx = document.getElementById('graph1').getContext('2d');
    var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'],
        datasets: [

                    <?php
                    foreach($statActivityList as $courbe){
                        $red = random_int(0,255);
                        $green = random_int(0,255);
                        $blue = random_int(0,255);
                    ?>

                    {
                        label: '<?=$courbe['name']?>',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            <?php
                            for($i=0;$i<=7;$i++){
                            ?>
                            'rgba(<?=$red?>,<?=$green?>,<?=$blue?>, 0.2)',
                            <?php } ?>
                        ],
                        borderColor: [
                            <?php
                            global $red;
                            for($i=0;$i<=7;$i++){
                            ?>
                            'rgba(<?=$red?>,<?=$green?>,<?=$blue?>, 1)',
                            <?php } ?>
                        ], //(test de nouvelle branche et ajout d'un texte avant de merge)
                        //après merge
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