@extends('layouts.admin_header')

@section('content')



        


        

<div class="row">
    <div class="row frmtitle mb"><h1>BIỂU ĐỒ</h1>
    </div>

    @foreach ($categoriesWithCounts as $category)
        <p>{{ $category->name_dm }}: {{ $category->total_quantity }} </p>
    @endforeach

   

    <div class="row frmcontent">
        <div id="piechart"></div>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <script type="text/javascript">
            // Load google charts
            google.charts.load('current', { 'packages': ['corechart'] });
            google.charts.setOnLoadCallback(drawChart);

            // Draw the chart and set the chart values
            function drawChart() {
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Task');
                data.addColumn('number', 'Hours per Day');

                // Create an empty data array
                var chartData = [];

                // Loop through categoriesWithCounts and add data to chartData
                @foreach ($categoriesWithCounts as $category)
                    chartData.push(['{{ $category->name_dm }}', {{ $category->total_quantity }}]);
                @endforeach

                // Add chartData to the DataTable
                data.addRows(chartData);

                var options = {
                    'title': 'Thống kê sản phẩm theo danh mục',
                    'width': 900,
                    'height': 400
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);
            }
        </script>
    </div>
</div>



@endsection
@extends('layouts.admin_footer')