<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.components.head')
</head>

<body>
    <div class="wrapper">
        @include('admin.components.header')


        <section class="charts section">
            <div class="container">
                <canvas id="categoryChart" width="400" height="400" style="height: 400px; width:400px; background-color:white;">

                </canvas>
            </div>

        </section>

        @include('admin.components.footer')
    </div>
    <script>
        // Get chart data from PHP
        let chartData = @json($chartData);

        // Extract data for categories and families
        let categoryNames = chartData.categoryFamiliesCount.map(category => category.name);
        let familyCounts = chartData.categoryFamiliesCount.map(category => category.families_count);

        // Render chart using Chart.js
        var ctx = document.getElementById('categoryChart').getContext('2d');
        var categoryChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: categoryNames,
                datasets: [{
                    label: 'Number of Families',
                    data: familyCounts,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
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
    </script>
    @include('admin.components.scripts')

</body>

</html>
