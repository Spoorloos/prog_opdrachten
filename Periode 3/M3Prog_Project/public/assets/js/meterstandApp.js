const ctx = document.getElementById('myChart');

!async function () {
    const response = await fetch('../assets/data/energy.json');
    const { labels, values } = await response.json();

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [
                {
                    label: 'Energy KwH per day',
                    data: values
                }
            ]
        }
    });
}();