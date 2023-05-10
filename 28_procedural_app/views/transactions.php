<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
    <style>
        :root {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 16px;
            color: #333;
            ;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        table tr th,
        table tr td {
            padding: .8em;
            border: 1px #eee solid;
        }

        tfoot tr th,
        tfoot tr td {
            font-size: 20px;
        }

        tfoot tr th {
            text-align: right;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Check #</th>
                <th>Description</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transactions as $transaction) : ?>
                <tr>
                    <td> <?= format_date($transaction['date']) ?> </td>
                    <td> <?= $transaction['check'] ?> </td>
                    <td> <?= $transaction['description'] ?> </td>
                    <td style="color: <?= get_color_amount($transaction['amount']) ?> ">
                        <?= format_dollar_amount($transaction['amount']) ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan=" 3">Total Income:</th>
                <td>
                    <?= format_dollar_amount($totals['total_income']) ?>
                </td>
            </tr>
            <tr>
                <th colspan="3">Total Expense:</th>
                <td>
                    <?= format_dollar_amount($totals['total_expense']) ?>
                </td>
            </tr>
            <tr>
                <th colspan="3">Net Total:</th>
                <td>
                    <?= format_dollar_amount($totals['net_total']) ?>
                </td>
            </tr>
        </tfoot>
    </table>
</body>

</html>