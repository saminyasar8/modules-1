 <?php
/* 
*swith satements
*match satements
 */

 $age = 51;
// switch ($age){
//     case 51:
//         echo ' age is 51';
        
//         break;
//     case 52:
//         echo 'age is 52';
//         break;
//      case 53:
//         echo 'age is 53';
//         break;
//     case 54:
//         echo 'age is 54';
//         break;
//     default:
//     echo 'AGE IS UNKNOWN';
// }

//match satements
$result = match ($age) {
    51 => 'age is 51 from match',
    52 => 'age is 52 from match',
    53 => 'age is 53 from match',
    54 => 'age is 54 from match',
    default => 'age is unkhnown form match',
};
echo $result ;