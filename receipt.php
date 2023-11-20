<?php
include ('connection.php');
    $username = $_POST["username"];
    $timeBook = $_POST["timeBook"];
    $dateBook = $_POST["dateBook"];

    $username = mysqli_real_escape_string($connection, $username);
    $timeBook = mysqli_real_escape_string($connection, $timeBook);
    $dateBook = mysqli_real_escape_string($connection, $dateBook);

$sql = "select user_data.fullname, user_data.email, booking_data.location, booking_data.duration, user_data.phoneNo,
invoice_data.invoiceID, invoice_data.datePayment, roomtype_data.roomPackage, roomtype_data.roomPrice, roomtype_data.price,
booking_data.breakfastPax, booking_data.dinnerPax, invoice_data.totalPayment from user_data INNER JOIN invoice_data
on user_data.username = invoice_data.username INNER JOIN booking_data on invoice_data.timeBook = booking_data.timeBook
INNER JOIN roomtype_data  on booking_data.roomID = roomtype_data.roomID WHERE booking_data.username = '$username'";

$result = mysqli_query($connection, $sql);
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
	$totalBreakfast = $row['breakfastPax'] * 30.00;
	$totalDinner = $row['dinnerPax'] * 50.00;
	$totalRoom = $row['price'] * $row['duration'];
echo '
<!DOCTYPE html>
<html>
	<head>
	<link rel = "icon" href = "logo2.png" type = "image/x-icon">
		<meta charset="utf-8" />
		<title>Payment Invoice</title>

		<style>
			body {
				background-color: #cbcdd5;
			}
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;
				color: #555;
				background-color: white;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
		</style>
	</head>

	<body>
		<div class="invoice-box">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title" style="font-size: 40px; font-weight:800;">
									<img src="logo3.png" style="width: auto; height:160px; max-width: 300px; margin-top:0px;" /><br>
									Payment Invoice
								</td>

								<td>
									Invoice #: '.$row["invoiceID"].'<br />
									Created: '.$row["datePayment"].'<br />
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									PochinKi Hotel & Resort<br />
									'.$row["location"].'<br />
								</td>

								<td>
								'.$row["fullname"].'<br />
								'.$row["phoneNo"].'<br />
								'.$row["email"].'
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td>Payment Method</td>
					<td>              </td>
				</tr>

				<tr class="details">
					<td>Card</td>
				</tr>

				<tr class="heading">
					<td>Detail</td>

					<td>Price</td>
				</tr>

				<tr class="item">
					<td>'.$row["roomPackage"].' ('.$row["roomPrice"].')</td>

					<td></td>
				</tr>

				<tr class="item">
					<td>'.$row["roomPackage"].' for '.$row['duration'].' days</td>

					<td>RM '.number_format((float)$totalRoom, 2, '.', '').'</td>
				</tr>

				<tr class="item">
					<td>'.$row["breakfastPax"].' Breakfast Pax</td>

					<td>RM '.number_format((float)$totalBreakfast, 2, '.', '').'</td>
				</tr>

				<tr class="item last">
					<td>'.$row["dinnerPax"].' Dinner Pax</td>

					<td>RM '.number_format((float)$totalDinner, 2, '.', '').'</td>
				</tr>

				<tr class="total">
					<td></td>

					<td>Total: RM '.$row["totalPayment"].'</td>
				</tr>
			</table>
		</div>
            <button onclick="printFunction()">Print</button>​
            <button><a href="home.php">Home</a></button>​
    <script>
      function printFunction() { 
        window.print(); 
      }
    </script>
	</body>
	';
}
?>