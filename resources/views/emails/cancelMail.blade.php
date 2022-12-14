<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Email Cancellation</title>

    <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }
        h1,h2,h3,h4,h5,h6,p,span,label {
            font-family: sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }
        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }
        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }
        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }
        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }
        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }
        .text-end {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }
        .no-border {
            border: 1px solid #fff !important;
        }
        .bg-blue {
            background-color: #00c8ff;
            color: #fff;
        }
    </style>
</head>
<body>

    <table class="order-details">
        <thead>
            <tr>
                <th width="30%" class="text-center">
                    <h2>Somosot Dental Clinic</h2>
                    <span>Date: {{\Carbon\Carbon::now()}}</span> <br>
                    <span>Website: </span> <br>
                    <span>Address: 88 Santos Baura St, Tubigon, 6329 Bohol</span> <br>
                </th>
            </tr>
            <tr class="bg-blue">
                <th>Cancellation Successful</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>
                    You have successfully cancelled your appointment.
                    <br>
                    Set another appointment <a href="">here</a>
                </td>
        </tbody>
    </table>

    <br>
    <p class="text-center">
       Thank you for choosing Somosot Dental Clinic!
    </p>

</body>
</html>
