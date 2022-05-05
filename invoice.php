<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Invoice</title>
    <style>
        table { font-size: 75%; table-layout: fixed; width: 100%; }
        table { border-collapse: separate; border-spacing: 2px; }
        th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
        th, td { border-radius: 0.25em; border-style: solid; }
        th { background: #EEE; border-color: #BBB; }
        td { border-color: #DDD; }
        table.table td:nth-child(1) { width: 40%; }
        table.table td:nth-child(2) { width: 20%; }
        table.table td:nth-child(3) { width: 20%; }
        table.table td:nth-child(4) { width: 20%; }

        table.meta{ float: right; width: 36%; }
        table.balance { float: left; width: 100%; }
        table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

        /* table meta */

        table.meta th { width: 40%; }
        table.meta td { width: 60%; }

        /* table items */

        table.inventory { clear: both; width: 100%; }
        table.inventory th { font-weight: bold; text-align: center; }

        table.inventory td:nth-child(1) { width: 26%; }
        table.inventory td:nth-child(2) { width: 38%; }
        table.inventory td:nth-child(3) { text-align: right; width: 12%; }
        table.inventory td:nth-child(4) { text-align: right; width: 12%; }
        table.inventory td:nth-child(5) { text-align: right; width: 12%; }

        /* table balance */

        table.balance th, table.balance td { width: 25%; }
        table.balance td { text-align: right; }

        .text-right{
            text-align: right;
        }
    </style>
</head><body>
<div>
    <div >
        <div>
            <div>
                <img src="images/logo.png" alt="logo" style="height:100px;width:auto;float: left; margin-bottom: 15px;">
                <h2 style="float:right">Invoice</h2>
            </div>
            <hr style="clear: both;">
            <div style="float:left">
                <address>
                    <strong>Billed To:</strong><br>
                    Fullname<br><br>
                    Company name<br>
                    Address line1,<br>
                    City State, zip<br>
                    Ph # / Email
                </address>
            </div>
            <table class="meta">
                <tr>
                    <th>Invoice #</th>
                    <td>202292AP06</td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>April 03, 2022</td>
                </tr>
                <tr>
                    <th>Customer ID</th>
                    <td>VAPSSOL</td>
                </tr>
            </table>
        </div>
    </div>
    <div style="clear: both;">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Order summary</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                            <tr>
                                <th><strong>Item</strong></th>
                                <th><strong>Qty</strong></th>
                                <th><strong>Hrs</strong></th>
                                <th class="text-right"><strong>Totals</strong></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><strong>Server Maintenance and Configuration</strong></td>
                                <td class="text-right">&nbsp;</td>
                                <td class="text-right">&nbsp;</td>
                                <td class="text-right">&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Amazon RDS for MariaDB Server <br> db.m4.10xlarge X 1 instance(s) <br> 30% Utilization</td>
                                <td>1</td>
                                <td>730 Hrs</td>
                                <td class="text-right">Rs 115041</td>
                            </tr>
                            <tr>
                                <td>Amazon RDS for MariaDB Storage <br> 25 GB X 1 instance(s)</td>
                                <td>1</td>
                                <td>730 Hrs</td>
                                <td class="text-right">Rs 431.25</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-right"></td>
                            </tr>
                            <tr>
                                <td><strong>Freelance - Software Development</strong></td>
                                <td class="text-right">&nbsp;</td>
                                <td class="text-right">&nbsp;</td>
                                <td class="text-right">&nbsp;</td>
                            </tr>
                            <tr>
                                <td>VAPS-MVP<br>Freelance $4/Hrs<br>60Hrs / Developers / Month</td>
                                <td>3</td>
                                <td>180 Hrs</td>
                                <td class="text-right">Rs 54000</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-right"></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="3"><strong>Subtotal</strong></td>
                                <td class="text-right">Rs 169472.25</td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="3"><strong>Processing Fee 2.5%</strong></td>
                                <td class="text-right">Rs 4237</td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="3"><strong>Total</strong></td>
                                <td class="text-right">Rs 173709.25</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="clear: both;">
        <h3 class="panel-title"><strong>Payment summary</strong></h3>
        <table class="balance">
            <tr>
                <th>Amount Paid</th>
                <td>-</td>
                <td rowspan="4" style="text-align: left;">
                    <p style="font-size: 11px;color: #f55959;">*** We will update and sent the receipt of your payment once the payment has been completely received.</p>
                </td>
            </tr>
            <tr>
                <th>Transaction Status</th>
                <td>Pending</td>
            </tr>
            <tr>
                <th>Transaction ID(s)</th>
                <td>-</td>
            </tr>
            <tr>
                <th>Transaction Date</th>
                <td>-</td>
            </tr>
        </table>
    </div>
    <div style="clear: both; text-align: center;font-size: 14px;">
        <p>Notice something wrong? <a href="mailto:email@gmail.com" style="color: #0867ec">Contact our support team</a> and we will be happy to help.</p>
        <p>XXX Softwares <br>Address line1 <br>PhNo <a href="mailto:email@gmail.com" style="color: #0867ec">email@gmail.com</a></p>
    </div>
    <i style="float: right; font-size: 10px;">Printed At: <?php echo date("M d, Y h:i:s A T");?></i>
</div>
</body></html>