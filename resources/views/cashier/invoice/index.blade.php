<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSIS-Invoice</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <style>
        @media print {
            @page {
                size: 210mm 148mm, landscape; /* A4 size */
                margin: 0;
            }

            body {
                visibility: hidden;
            }

            .print-card {
                visibility: visible;
                position: center;
                left: 0;
                top: 0;
                width: 100%;
            }

            /* Remove header and footer */
            @page {
                margin-top: 0;
                margin-bottom: 0;
            }
            /* Remove footer */
            .print-card .modal-footer {
                display: none;
            }
        }

    </style>
</head>
<body>
    <div class="card shadow mx-auto mt-5 animated--grow-in print-card" style="width: 80%;">
        <div class="card-header py-3 d-flex">
            <div class="me-auto my-auto">
                <img src="{{ asset('img/logo.png') }}" alt="" width="50px">
            </div>
            <div class="ms-auto my-auto">
                <h3 class="">INVOICE- {{$invoice}} </h3>
                <span class=""> {{$time}} </span>
            </div>
        </div>
        <div class="card-body p-4">
            <h3 class="m-auto">
                {{$bill->student->program->description}}
            </h3>
            <span class=""> {{ '('.$bill->student->student_id.') - '.$bill->student->name}} </span>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Fees</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tuition Fee</td>
                            <td>{{ '₱' . number_format($tuition, 2, '.',',') }}</td>
                        </tr>
                        <tr>
                            <td>Related Learning Experience (RLE) Fee</td>
                            <td>{{ '₱' . number_format($rle, 2, '.',',') }}</td>
                        </tr>
                        <tr>
                            <td>Computer Fee</td>
                            <td>{{ '₱' . number_format($com_fee, 2, '.',',') }}</td>
                        </tr>
                        <tr>
                            <td>Special Fee</td>
                            <td>{{ '₱' . number_format($spe_fee, 2, '.',',') }}</td>
                        </tr>
                        <tr>
                            <td>Other School Fee</td>
                            <td>{{ '₱' . number_format($oth_sch_fee, 2, '.',',') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <?php
            $total = $tuition + $rle + $com_fee + $spe_fee + $oth_sch_fee;
            $discount = $tuition * ($bill->discount->amount / 100);
            $remain = ($total - $discount) - $cash; // Example value, you can replace it with your actual value

            if ($remain < 0) {
                $str = "Balance";
            } else {
                $str = "Change";
            }

            $positiveValue = abs($remain); // Get the absolute value of $remain
            ?>


            <div class="col-xs-6 text-right float-end">
                <p class="m-0">Total: {{ '₱' . number_format($total, 2, '.',',') }}</p>
                <p class="m-0">Discount ({{ number_format($bill->discount->amount, 1, '.',',') }}%): {{ '₱' . number_format($discount, 2, '.', ',') }} </p>
                <hr class="m-0">
                <p class="m-0">Total Balance: {{ '₱' . number_format(($total - $discount), 2, '.',',') }}</p>
                <p class="m-0">Cash: {{ '₱' . number_format($cash, 2, '.',',') }}</p>
                <hr class="m-0">
                <p class="mt-2">{{ $str }}: {{ '₱' . number_format(abs($remain), 2, '.',',') }} </p>
            </div>
        </div>
        <div class="modal-footer">
            <p class="me-auto">THANK YOU!</p>
            <button class="btn btn-sm btn-outline-success m-1" onclick="window.print()"><i class="fas fa-print"></i> Print</button>
            <a class="btn btn-sm btn-outline-danger m-1" href="{{ route('home') }}"><i class="fas fa-window-close text-danger"></i> Close</a>
        </div>
    </div>
</body>
</html>
