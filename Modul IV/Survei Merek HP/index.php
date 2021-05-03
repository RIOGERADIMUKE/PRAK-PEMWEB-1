<html>
<head>
    <link rel="stylesheet" href="style.css">
    <script src="chart.js"></script>
</head>

<body>

    <div class="row">
        <div class="column">
            <h1>Data MEREK HP</h1>
            <table border="1" align="center">
                <thead>
                    <tr>
                        <th>MEREK HP</th>
                        <th>ID</th>
                        <th>TAHUN</th>
                        <th>HARGA</th>

                    </tr>
                </thead>
                <?php
                require 'connect.php';
                $view = $koneksi->query("SELECT * FROM jenis");
                while ($row = $view->fetch_array()) {

                ?>
                    <tr>
                        <td><?php echo $row['jenis_hp']; ?></td>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['tahun']; ?></td>
                        <td><?php echo $row['harga']; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <figure class="highcharts-figure">
        <h1 align="center" class="highcharts-description"> Hasil Dari Jenis HP</h1>
        <table id="datatable">
            <thead>
            <table border="1" align="center">
                <tr>
                    <th>MEREK</th>
                    <th>JUMLAH</th>

                </tr>
            </thead>
            <tbody>
                <?php
                require 'connect.php';
                $view = $koneksi->query("SELECT jenis_hp as MEREK, COUNT(jenis_hp) AS JUMLAH FROM jenis GROUP BY jenis_hp;");
                while ($row = $view->fetch_array()) { ?>
                    <tr>

                        <td><?php echo $row['MEREK']; ?></td>
                        <td><?php echo $row['JUMLAH']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php
        ?>
    </figure>
    <div align="center">
    <canvas id="myChart" width="400" height="400"></canvas>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [<?php
                            foreach ($view as $value) {
                                echo "'" . $value['MEREK'] . "',";
                            } ?>],
                datasets: [{
                    label: 'HASIL',
                    data: [<?php foreach ($view as $value) {
                                echo $value['JUMLAH'] . ", ";
                            } ?>],
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
                    borderWidth: 1
                }]
            },
            options: {
                responsive: false
            }
        });
    </script>
    </div>
</body>

</html>
</body>

</html>
