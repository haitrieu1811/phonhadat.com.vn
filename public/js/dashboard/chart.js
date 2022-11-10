// let myChart = document.getElementById('myChart').getContext('2d');
//         // Global Options
//         Chart.defaults.global.defaultFontFamily = 'Space Grotesk';
//         Chart.defaults.global.defaultFontSize = 15;
//         Chart.defaults.global.defaultFontColor = '#333';

//         let massPopChart = new Chart(myChart, {
//             type: 'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
//             data: {
//                 labels: ['Boston', 'Worcester', 'Springfield', 'Lowell', 'Cambridge', 'New Bedford'],
//                 datasets: [{
//                     label: 'Population',
//                     data: [
//                         617594,
//                         181045,
//                         153060,
//                         106519,
//                         105162,
//                         95072
//                     ],
//                     //backgroundColor:'green',
//                     backgroundColor: [
//                         'rgba(255, 99, 132, 0.6)',
//                         'rgba(54, 162, 235, 0.6)',
//                         'rgba(255, 206, 86, 0.6)',
//                         'rgba(75, 192, 192, 0.6)',
//                         'rgba(153, 102, 255, 0.6)',
//                         'rgba(255, 159, 64, 0.6)',
//                         'rgba(255, 99, 132, 0.6)'
//                     ],
//                     borderWidth: 1,
//                     borderColor: '#777',
//                     hoverBorderWidth: 3,
//                     hoverBorderColor: '#000'
//                 }]
//             },
//             options: {
//                 title: {
//                     display: true,
//                     text: 'Largest Cities In Massachusetts',
//                     fontSize: 25
//                 },
//                 legend: {
//                     display: true,
//                     position: 'right',
//                     labels: {
//                         fontColor: '#000'
//                     }
//                 },
//                 layout: {
//                     padding: {
//                         left: 50,
//                         right: 0,
//                         bottom: 0,
//                         top: 0
//                     }
//                 },
//                 tooltips: {
//                     enabled: true
//                 }
//             }
//         });

// Global Options
Chart.defaults.global.defaultFontFamily = 'Space Grotesk';
Chart.defaults.global.defaultFontSize = 12;
Chart.defaults.global.defaultFontColor = '#333';

const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 17, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1.5
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

const ctx2 = document.getElementById('myChart2').getContext('2d');
const myChart2 = new Chart(ctx2, {
    type: 'horizontalBar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 17, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1.5
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

const ctx3 = document.getElementById('myChart3').getContext('2d');
const myChart3 = new Chart(ctx3, {
    type: 'radar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 17, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1.5
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

const ctx4 = document.getElementById('myChart4').getContext('2d');
const myChart4 = new Chart(ctx4, {
    type: 'polarArea',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 17, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1.5
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});