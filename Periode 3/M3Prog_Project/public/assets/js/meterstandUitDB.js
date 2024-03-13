const ctx = document.getElementById('myChart');

!async function () {
    const response = await fetch('../07/meterstandenUitDB.php');
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