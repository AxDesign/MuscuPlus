<script>
    var ctx = document.getElementById('graph1').getContext('2d');
    var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'],
        datasets: [

                    <?php
                    foreach($statActivityList as $courbe){
                        
                    ?>
                    
                    {
                        label: '<?=$courbe['name']?>',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            <?php
                            for($i=0;$i<=7;$i++){
                            ?>
                            'rgba(215,3,148, 0.2)',
                            <?php } ?>
                        ],
                        borderColor: [
                            <?php
                            global $red;
                            for($i=0;$i<=7;$i++){
                            ?>
                            'rgba(215,3,148, 1)',
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