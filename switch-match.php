<?php

// Switch

//$paymentStatus = "pending";
//
//switch($paymentStatus) {
//    case "paid":
//        echo "Paid";
//        break;
//
//    case "declined":
//    case "rejected":
//        echo "Payment declined";
//        break;
//
//    case "pending":
//        echo "Payment pending";
//        break;
//
//    default:
//        echo "Unknown payment status";
//}

//$paymentStatuses = [1, 3, 0];
//
//foreach($paymentStatuses as $paymentStatus){
//    switch($paymentStatus) {
//        case 1:
//            echo "Paid";
//            break 2; // аналогично с циклами, можно использовать необязательный параметр, чтобы прервать цикл
//
//        case 2:
//        case 3:
//            echo "Payment declined";
//            break;
//
//        case 4:
//            echo "Payment pending";
//            break;
//
//        default:
//            echo "Unknown payment status";
//    }
//
//    echo '<br>';
//}

// match
$paymentStatus = 5;


/*
 В случае с match нужно указывать все возможные варианты
 Иначе возникнет ошибка, если указанного ключа не будет
 Но также можно использовать значение по умолчанию как в switch
 Также match выполняет строгое сравнение
*/

$paymentStatusDisplay = match($paymentStatus) {
    1 => 'Paid',
    2 => 'Payment Decided',
    0 => 'Pending Payment',
    default => 'Default match'
};

echo $paymentStatusDisplay;
