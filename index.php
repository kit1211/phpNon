

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bank Interest Calculator</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5 w-50">
            <div class="card">
                
                <div class="card-body">
                <?php
                    // Default values
                    $amount = 0;
                    $years = 0;
                    $interest_rate = 2; // Assume 2 Baht per year

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Get input values
                        $years = (int)$_POST['years'];
                        $amount = (int)$_POST['amount'];
                        
                        // Calculate total interest for the given years
                        $total_interest = $years * $interest_rate;
                        $final_amount = $amount + $total_interest;
                        
                        echo '
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">สำเร็จ!</h4>
                            <p>ดอกเบี้ยปีละ '.$interest_rate.' บาท</p>
                            <p>ฝากครบ '.$years.' ปี จะได้เงิน '.$final_amount.' บาท</p>
                            <hr>
                            <p class="mb-0">ขอบคุณคับ</p>
                        </div>
                        ';
                    }
                ?>

                    <h1>คำนวนดอก</h1>
                    <form method="post" action="">
                        <label for="amount">จะฝากเงินกี่บาทคับ:</label><br>
                        <input type="number" id="amount" class="form-control"  name="amount" required><br><br>
                        
                        <label for="years">จะฝากเงินกี่ปีคับ:</label><br>
                        <input type="number" id="years" class="form-control"  name="years" required><br><br>
                        
                        <button type="submit"value="Submit" class="btn btn-success">คำนวน</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>