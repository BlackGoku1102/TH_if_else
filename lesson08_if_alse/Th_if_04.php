<?php
$name = 'Hoang Kieu Anh';
$test_scores = array(80,80,85,80,83);
$sum = array_sum($test_scores);
$average = $sum / count($test_scores);
if ($average >=90){
    echo "Học sinh $name có điểm trung bình là $average xếp loại Sinh Giỏi";
} else {
    if ($average >= 80){
        echo "Học sinh $name có điểm trung bình là $average xếp loại Khá";
    } else{
        if ($average >=70){
            echo "Học Sinh $name có điểm trung bình là $average xếp loại khá";
        }else {
            if($average >=60){
                echo "Học sinh $name có điểm trung bình là $average xếp loại trung bình";
            } else {
                if ($avarege >=50){
                    echo "Học sinh $name có điểm trung bình là $average xếp loại yếu";
                }
            }
        }
    }
}
?>