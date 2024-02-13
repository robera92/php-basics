<?php include('data/data.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/print.css" media="print" rel="stylesheet" />
</head>
<body>
    <div class="container">
    <h1 class="d-print-none">Air Ticket</h1>
    <?php if(isset($_POST['flightNo']) && !empty($_POST['flightNo'])){
        include('view/card.view.php');
    } 
    ?>
    <div class="d-print-none">
    <hr/>
    <h2>Data Entry Form</h2>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="flightNo" class="form-label">Flight No.</label>
            <select name="flightNo" id="flightNo" class="form-select"  required>
                <option value="" disabled selected>Please select</option>
                <?php foreach ($flights as $key=>$value): ?>
                    <option value="<?= htmlspecialchars($key) ?>"><?= htmlspecialchars($key.': '.$destinations[$value['from']].' to '.$destinations[$value['to']]) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="personalCode" class="form-label">Personal Code</label>
            <input type="number" name="personalCode" class="form-control" id="personalCode" placeholder="Enter personal code" required>
        </div>
        <div class="mb-3">
            <label for="name" name="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" required>
        </div>
        <div class="mb-3">
            <label for="surname" class="form-label">Surname</label>
            <input type="text" name="surname" class="form-control" id="surname" placeholder="Enter surname" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" class="form-control" id="price" placeholder="Enter price" required>
        </div>
        <div class="mb-3">
            <label for="luggage" class="form-label">Luggage weight</label>
            <input type="number" name="luggage" class="form-control" id="luggage" placeholder="Enter luggage weight" required>
        </div>
        <div class="mb-3">
            <label for="notes" class="form-label">Notes</label>
            <textarea class="form-control" name="notes" id="notes" rows="3" placeholder="Enter any additional notes"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Print</button>
    </form>
    </div>

    </div>
</body>
</html>