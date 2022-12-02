<?php
require 'datatable_api.php';

// echo $connection;



$html = '<!DOCTYPE html>
<html>
    <head>
        <title>Business Datatables</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    </head>
    <body>
        <div style="margin:40px;">
            <div style="font-size:30px; margin-bottom: 20px;">
                Business Jquery Datatable
            </div>
            <div>
                <table id="business-datatable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Business Name</th>
                            <th>Business Type</th>
                            <th>Region</th>
                            <th>Business Start Date</th>
                            <th>Assistant Type</th>
                            <th>Plan Subscribed</th>
                            <th>Action</th>
                        </tr>

                    </thead>
                    <tbody>';

$tableData = '';

foreach($data as $row) {
    $tableData .= '
        <tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['business_name'].'</td>
            <td>'.$row['business_type'].'</td>
            <td>'.$row['region'].'</td>
            <td>'.$row['business_start_date'].'</td>
            <td>'.$row['assistant_type'].'</td>
            <td>'.$row['plan_subscribed'].'</td>
            <td><button class="btn btin-primary"><a href="'.'edit_data.php/'.$row['id'].'">Edit</a></button></td>
        </tr>';
}

$html .= $tableData;


$html = $html .  '</tbody>
                </table>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script>
            $("#business-datatable").dataTable();
        </script>
    </body>
</html>';

echo $html;

?>