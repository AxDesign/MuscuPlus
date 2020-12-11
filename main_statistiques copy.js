

var activities = [
    {
        name: 'Musculation',
        borderColor: 'rgba(54, 162, 235, 1)',
        backgroundColor: 'rgba(54, 162, 235, 0.2)',
        weekData: [4, 6, 0, 0, 3, 4, 1]
    },
    {
        name: 'Natation',
        borderColor: 'rgba(255, 206, 86, 1)',
        backgroundColor: 'rgba(255, 206, 86, 0.2)',
        weekData: [2, 0, 0, 0, 2, 0, 1]
    },
    {        name: 'Vélo',
        borderColor: 'rgba(100, 100, 205, 1)',
        backgroundColor: 'rgba(100, 100, 205, 0.2)',
        weekData: [0, 0, 1, 1, 3, 0, 0]
    }
];

var ctx = document.getElementById('graph1').getContext('2d');
var data = {
    labels: ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'],
    datasets: []
};

activities.forEach(activity => {
    maCourbe = new Object();
    maCourbe.label = activity.name;
    maCourbe.data = activity.weekData;
    maCourbe.backgroundColor = activity.backgroundColor;
    maCourbe.borderColor = activity.borderColor;

    data.datasets.push(maCourbe);
});

console.log(data);

var options;

var config = {
    type: 'line',
    data: data,
    options: {}
};
var graph1 = new Chart(ctx, config)

