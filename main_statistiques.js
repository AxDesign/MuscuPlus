

var activities = [
    {
        label: 'Musculation',
        borderColor: 'rgba(54, 162, 235, 1)',
        backgroundColor: 'rgba(54, 162, 235, 0.2)',
        data: [4, 6, 0, 0, 3, 4, 1]
    },
    {
        label: 'Natation',
        borderColor: 'rgba(255, 206, 86, 1)',
        backgroundColor: 'rgba(255, 206, 86, 0.2)',
        data: [2, 0, 0, 0, 2, 0, 1]
    },
    {        label: 'Vélo',
        borderColor: 'rgba(100, 100, 205, 1)',
        backgroundColor: 'rgba(100, 100, 205, 0.2)',
        data: [0, 0, 1, 1, 3, 0, 0]
    }
];

//À TERMINER
// $.getJSON( "jsonDataStatistiques.php", function( data ) {
//     var items = [];
//     $.each( data, function( key, val ) {
//       items.push( "<li id='" + key + "'>" + val + "</li>" );
//     });
   
//     $( "<ul/>", {
//       "class": "my-new-list",
//       html: items.join( "" )
//     }).appendTo( "body" );
//   });

var ctx = document.getElementById('graph1').getContext('2d');
var data = {
    labels: ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'],
    datasets: []
};

activities.forEach(activity => {
    data.datasets.push(activity);
});

console.log(data);

var options;

var config = {
    type: 'line',
    data: data,
    options: {}
};
var graph1 = new Chart(ctx, config)

