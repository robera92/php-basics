<?php 

$flightNo = isset($_POST['flightNo']) ? htmlspecialchars($_POST['flightNo']) : '';
$from = isset($destinations[$flights[$flightNo]['from']]) ? htmlspecialchars($destinations[$flights[$flightNo]['from']]. ' ('.$flights[$flightNo]['from'].')') : 'Unknown';
$to = isset($destinations[$flights[$flightNo]['to']]) ? htmlspecialchars($destinations[$flights[$flightNo]['to']]. ' ('.$flights[$flightNo]['to'].')') : 'Unknown';
$plane = isset($flights[$flightNo]['plane']) ? htmlspecialchars($flights[$flightNo]['plane']) : 'Unknown';
$flight_type = isset($flights[$flightNo]['type']) ? htmlspecialchars($flights[$flightNo]['type']) : 'Unknown';
$time = isset($flights[$flightNo]['time']) ? intval($flights[$flightNo]['time']) : 0;
$price = isset($_POST['price']) ? round(floatval($_POST['price']), 2) : 0;
$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : 'Unknown';
$surname = isset($_POST['surname']) ? htmlspecialchars($_POST['surname']) : 'Unknown';
$luggage = isset($_POST['luggage']) ? intval($_POST['luggage']) : 0;
$personalCode = isset($_POST['personalCode']) ? intval($_POST['personalCode']) : '';
$notes = isset($_POST['notes']) ? htmlspecialchars($_POST['notes']) : '-';

$total_price = $price;
if($luggage > 20)$total_price += 30;

?>

<div class="py-5">
        <div class="ticket">
            <div class="row">
                <div class="col-md-8">
                    <h6><?=date('Y/m/d')?><?=' | '.$flightNo?></h6>
                    <div class="row flight-details">
                        <div class="col">
                            <strong>From</strong>
                            <p><?=$from?></p>
                        </div>
                        <div class="col">
                            <strong>To</strong>
                            <p><?=$to?></p>
                        </div>
                        <div class="col">
                            <strong><?=$plane?></strong>
                            <p><?=intval($time/60)?> hours
                            <?=$flight_type?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <strong>Notes</strong>
                            <p><?=$notes?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h6>Overview</h6>
                    <div class="summary">
                        <p><small><?=$personalCode;?></small></p>
                        <p>Passanger: <?=$name.' '.$surname;?></p>
                        <p>Flight: <span><?=$price?> €</span></p>
                        <p>Luggage: <span><?=$luggage?> kg</span></p>
                        <hr>
                        <p>Total: <span class="price"><?=$total_price?> €</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>