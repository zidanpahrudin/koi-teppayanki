<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Invoice KOI Teppanyaki</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-weight: bold;
            margin: 0;
            padding: 0;
        }

        .invoice-box {
            width: 100%;
            max-width: 600px;
            margin: auto;
            padding: 20px;
            box-sizing: border-box;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        }

        .header,
        .footer {
            text-align: center;
        }

        img {
            max-width: 100px;
            height: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 11px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 6px;
            text-align: center;
        }

        .note {
            font-size: 10px;
            margin-top: 15px;
        }

        .no-border td {
            border: none !important;
        }

        .right-align {
            text-align: right;
        }

        @media print {
            body {
                margin: 0;
            }

            .invoice-box {
                box-shadow: none;
                border: none;
                padding: 0;
                width: 100%;
                max-width: none;
            }
        }
    </style>

</head>

<body>
    <div class="invoice-box">
        <div class="container">
            <div class="row">
                <div class="header col-4">
                    <img class="img-circle img-fluid w-50 d-block mx-auto" src="<?= base_url('assets/dist/img/home_service_logo.webp') ?>" />
                    <br>
                    <h5>KOI TEPPANYAKI HOME SERVICE</h5>
                    <p>Telp. 0812-8881-6061</p>
                </div>

                <table class="col-8">
                    <tr>
                        <td><strong>Invoice Number:</strong> 8331/2003/2025</td>
                        <td><strong>Chef:</strong></td>
                    </tr>
                    <tr>
                        <td><strong>To:</strong> Linda</td>
                        <td><strong>Date & Time:</strong> Kamis 20 Maret 2025 / 18.00</td>
                    </tr>
                    <tr>
                        <td><strong>Telp:</strong> 082125248331</td>
                        <td><strong>Address:</strong> Da Latinos Cluster Caribbean Island Blok K 6 No. 3 Rawa Buntu Serpong Tangsel</td>
                    </tr>
                </table>
            </div>

        </div>


        <br>

        <table>
            <tr>
                <th>No</th>
                <th>Menu</th>
                <th>QTY</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Slice Beef Teppanyaki</td>
                <td>30</td>
                <td>Rp95,000</td>
                <td>Rp2,850,000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Vegetables *TOGE PACKOY*</td>
                <td>30</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Miso Soup</td>
                <td>30</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Chicken Dumpling</td>
                <td>30</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Fried Chicken Shumai</td>
                <td>30</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>6</td>
                <td>Nasi Putih</td>
                <td>30</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>7</td>
                <td>Lemon Tea</td>
                <td>30</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>8</td>
                <td>Silky Pudding <b>MIX</b></td>
                <td>30</td>
                <td></td>
                <td></td>
            </tr>
        </table>

        <table class="no-border">
            <tr>
                <td class="right-align"><strong>Total:</strong> Rp2,850,000</td>
            </tr>
            <tr>
                <td class="right-align"><strong>Dp:</strong> Rp2,000,000</td>
            </tr>
            <tr>
                <td class="right-align"><strong>Pelunasan:</strong> Rp850,000</td>
            </tr>
        </table>

        <div class="note">
            <p>* Mohon di pastikan untuk Serah terima alat makan dengan team yang bertugas</p>
            <p>* Jika terdapat kehilangan alat makan maka akan ditanggung oleh Customer</p>
            <p>* Harga = Piring 20.000, Mangkok 10.000, Gelas 10.000</p>
        </div>

        <table class="no-border">
            <tr>
                <td><strong>Terms of Payment:</strong><br>Minimal DP 50% dari Harga Total<br>Pelunasan dibayarkan H-1 Sebelum Acara</td>
                <td><strong>Transfer Account:</strong><br>Bank BCA (IDR)<br>A/c: 0699212000<br>A/N: Aristo Darian Wong</td>
                <td class="header"><strong>Best Regards:</strong><br><img class="img-circle img-fluid w-25 d-block mx-auto" src="<?= base_url('assets/dist/img/home_service_logo.webp') ?>" /><br>KOI TEPPANYAKI</td>
            </tr>
        </table>
    </div>
</body>

<script>
    window.onload = function() {
        window.print();
    }
</script>

</html>