<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $SalQuant=filter_input(INPUT_POST, 'SalaryQuantity', FILTER_VALIDATE_INT);
        $SalType=filter_input(INPUT_POST, 'salaryType', FILTER_VALIDATE_INT);
        
        $SalAnnual = $SalQuant*($SalType*12);
        $TaxAnnual = 0.00;
        $TaxMonthly = 0.00;

        switch (true){
            case in_array($SalAnnual, range(0,250000)):
                break;
            case in_array($SalAnnual, range(250000, 400000)):
                $TaxAnnual = ($SalAnnual-250000)*0.20;
                $TaxMonthly = $TaxAnnual/12;
                break;
            case in_array($SalAnnual, range(400000,800000)):
                $TaxAnnual = (($SalAnnual-400000)*0.25)+30000;
                $TaxMonthly = $TaxAnnual/12;
                break;
            case in_array($SalAnnual, range(800000, 2000000)):
                $TaxAnnual = (($SalAnnual-800000)*0.30)+130000;
                $TaxMonthly = $TaxAnnual/12;
                break;
            case in_array($SalAnnual, range(2000000, 8000000)):
                $TaxAnnual = (($SalAnnual-2000000)*0.32)+490000;
                $TaxMonthly = $TaxAnnual/12;
                break;
            case ($SalAnnual>800000):
                $TaxAnnual = (($SalAnnual-8000000)*0.35)+2410000;
                $TaxMonthly = $TaxAnnual/12;
                break;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAXXY</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="headContainer">
            <div class="item headFrame">
                <h1>TAXXY</h1>
                <h3>A TAX CALCULATOR WEB APP</h3>
            </div>
        </div>
        <div class="formContainer">
            <div class="item cForm">

                <form action="" method="post" name="Calculator_Form">
                    <fieldset>
                        <label for="quantity">Salary: </label>
                        <input type="number" class="quantity" id="SalaryQuantity" name="SalaryQuantity" min="0" max="999999" required>
                    </fieldset>

                    <fieldset class="field-radio">
                        <label for="">Type: </label>
                        <input class="radio-inp" type="radio" name="salaryType" id="salType" value="2" required>
                        <label for="">Bi-Monthly</label>
                        <input class="radio-inp" type="radio" name="salaryType" id="salType" value="1">
                        <label for="">Monthly</label>
                    </fieldset>
                        <input type="submit" value="Calculate" class="calc">
                        
                    <fieldset class="result result-item1">
                        <label for="">Annual Salary</label>
                        <label for="annSal">PHP.</label>
                        <input type="number" class="annSal" id="" value="<?php echo number_format((float)$SalAnnual, 2, '.', '');?>" disabled>
                    </fieldset>
                    <fieldset class="result result-item2">
                        <label for="">Est. Annual Tax</label>
                        <label for="annSal">PHP.</label>
                        <input type="number" class="annTax" id="" value="<?php echo number_format((float)$TaxAnnual, 2, '.', '');?>" disabled>
                    </fieldset>  
                    <fieldset class="result result-item3"> 
                        <label for="">Est. Montly Tax</label>
                        <label for="annSal">PHP.</label>
                        <input type="number" class="monthTax" id="" value="<?php echo number_format((float)$TaxMonthly, 2, '.', '');?>" disabled>
                    </fieldset>

                </form>
            </div>
        </div>
    </div>
</body>
</html>