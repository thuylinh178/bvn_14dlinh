<?php
//Cau1
function kiem_tra_so_chan($so) {
    if ($so % 2 == 0) {
        return "$so là số chẵn";
    } else {
        return "$so là số lẻ";
    }
}
// Sử dụng hàm kiem_tra_so_chan
$so_kiem_tra = 10; // Thay đổi giá trị số này để kiểm tra
$result = kiem_tra_so_chan($so_kiem_tra);
echo $result;
echo "<br>";

//Cau2
function tinh_tong($n) {
    $so_dau = 1;
    $so_cuoi = $n;
    $so_so_hang = $n;
    
    $tong = ($so_dau + $so_cuoi) * $so_so_hang / 2;
    
    return $tong;
}

// Sử dụng hàm tinh_tong
$n = 5; 
$tong = tinh_tong($n);
echo "Tổng của các số từ 1 đến $n là: $tong"; 
echo "<br>";

// Cau 3

echo "<ul>";
for ($i = 1; $i <= 10; $i++) {
    echo "<li>Bảng cửu chương $i:";
    echo "<ul>";
    for ($j = 1; $j <= 10; $j++) {
        $tich = $i * $j;
        echo "<li>$i x $j = $tich</li>";
    }
    echo "</ul></li>";
}
echo "</ul>";
echo "<br>";

// Cau4

function kiem_tra_tu($chuoi, $tu_can_tim) {
    
    $vi_tri = stripos($chuoi, $tu_can_tim);
    
    
    if ($vi_tri !== false) {
        return "Chuỗi '$chuoi' chứa từ '$tu_can_tim'.";
    } else {
        return "Chuỗi '$chuoi' không chứa từ '$tu_can_tim'.";
    }
}

// Sử dụng hàm kiem_tra_tu
$chuoi = "Bau Bau Studio chao ban!"; // Chuỗi cần kiểm tra
$tu_can_tim = "Studio";    // Từ cần tìm

$result = kiem_tra_tu($chuoi, $tu_can_tim);
echo $result;
echo "<br>";

// Cau 5

$mang = array(1, 7, 8, 10, 5);

// Tìm giá trị lớn nhất và nhỏ nhất
$max = max($mang);
$min = min($mang);

echo "Giá trị lớn nhất trong mảng là: $max<br>";
echo "Giá trị nhỏ nhất trong mảng là: $min";

echo "<br>";

// Cau 6

// Mảng cần sắp xếp
$mang = array(8, 2, 3, 5, 1);

// Sắp xếp mảng theo thứ tự tăng dần
sort($mang);

// In mảng sau khi đã sắp xếp
echo "Mảng sau khi đã sắp xếp theo thứ tự tăng dần: ";
foreach ($mang as $gia_tri) {
    echo "$gia_tri ";
}
echo "<br>";

// Cau 7

function tinh_giai_thua($n) {
    $giai_thua = 1;
    for ($i = 1; $i <= $n; $i++) {
        $giai_thua *= $i;
    }
    return $giai_thua;
}

// Sử dụng hàm tinh_giai_thua
$so = 10; 
$giai_thua = tinh_giai_thua($so);
echo "Giai thừa của $so là: $giai_thua";
echo "<br>";

//Cau 8
  function kiemTraSoNguyenTo($n){
        if($n<2){
            return false;
        }
        for($i=2;$i<=sqrt($n);$i++){
            if ($n % $i == 0) {
                return false;
        }
    }
    return true;
}
$a=1;
$b=100;
echo "Các số nguyên tố trong khoảng ($a;$b) là: " ;
for($i=$a; $i<=$b;$i++){
    if(kiemTraSoNguyenTo($i)){
        echo $i. " ";
    }
}
echo "<br>";

//Cau 9

function tinh_tong_mang($mang) {
    return array_sum($mang);
}

// Mảng cần tính tổng
$mang = array(3, 5, 8, 4, 2);

// Gọi hàm tinh_tong_mang và in kết quả ra màn hình
$tong = tinh_tong_mang($mang);
echo "Tổng của mảng là: $tong";
echo "<br>";

//Cau 10

function in_fibonacci_trong_khoang($start, $end, $a = 0, $b = 1) {
    if ($a <= $end) {
        if ($a >= $start) {
            echo $a . ", ";
        }
        in_fibonacci_trong_khoang($start, $end, $b, $a + $b);
    }
}

// Khoảng cần in số Fibonacci
$start = 2;
$end = 20;

// Gọi hàm và in kết quả ra màn hình
echo "Các số Fibonacci trong khoảng từ $start đến $end là: ";
in_fibonacci_trong_khoang($start, $end);

echo "<br>";

//Cau 11

function kiem_tra_so_armstrong($n) {
    $so_goc = $n;
    $so_luong_chu_so = strlen($n);
    $tong_luy_thua = 0;

    
    while ($so_goc > 0) {
        $chu_so = $so_goc % 10;
        $tong_luy_thua += pow($chu_so, $so_luong_chu_so);
        $so_goc = (int)($so_goc / 10);
    }

    // Kiểm tra xem tổng lũy thừa có bằng số gốc hay không
    return $tong_luy_thua == $n;
}
echo "<br>";
// Số cần kiểm tra
$so = 153; 

// Kiểm tra và in kết quả ra màn hình
if (kiem_tra_so_armstrong($so)) {
    echo "$so là số Armstrong.";
} else {
    echo "$so không là số Armstrong.";
}

// Cau 12
function chen_phan_tu($mang, $vi_tri_chen, $gia_tri_chen) {
    $mang_sau_chen = array();

    // Kiểm tra vị trí chèn có hợp lệ không
    if ($vi_tri_chen < 0 || $vi_tri_chen > count($mang)) {
        echo "Vị trí chèn không hợp lệ.";
        return $mang;
    }

    // Duyệt qua mảng và chèn giá trị vào vị trí mong muốn
    foreach ($mang as $index => $gia_tri) {
        if ($index == $vi_tri_chen) {
            $mang_sau_chen[] = $gia_tri_chen;
        }
        $mang_sau_chen[] = $gia_tri;
    }

    // Nếu vị trí chèn là cuối cùng, thêm giá trị vào sau cùng
    if ($vi_tri_chen == count($mang)) {
        $mang_sau_chen[] = $gia_tri_chen;
    }

    return $mang_sau_chen;
}

// Mảng ban đầu
$mang_ban_dau = array(1, 2, 3, 4, 5);

// Vị trí chèn và giá trị chèn
$vi_tri_chen = 2;
$gia_tri_chen = 10;

// Gọi hàm chen_phan_tu và in kết quả ra màn hình
$mang_sau_chen = chen_phan_tu($mang_ban_dau, $vi_tri_chen, $gia_tri_chen);
echo "Mảng sau khi chèn: " . implode(', ', $mang_sau_chen);
echo "<br>";

//Cau13

function loai_bo_trung_lap($mang) {
   
    return array_unique($mang);
}

// Mảng ban đầu chứa các phần tử trùng lặp
$mang_ban_dau = array(1, 2, 3, 4, 2, 3, 5);

// Gọi hàm loai_bo_trung_lap và in kết quả ra màn hình
$mang_sau_loai_bo = loai_bo_trung_lap($mang_ban_dau);
echo "Mảng sau khi loại bỏ phần tử trùng lặp: " . implode(', ', $mang_sau_loai_bo);
echo "<br>";

//Cau14 Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.

function tim_vi_tri_phan_tu($mang, $gia_tri) {
    // Sử dụng hàm array_search để tìm vị trí của phần tử trong mảng
    $vi_tri = array_search($gia_tri, $mang);

    // Kiểm tra xem phần tử có tồn tại trong mảng không
    if ($vi_tri !== false) {
        return $vi_tri;
    } else {
        return "Phần tử không tồn tại trong mảng.";
    }
}

// Mảng ban đầu
$mang_ban_dau = array(1, 2, 3, 4, 5);

// Phần tử cần tìm
$gia_tri_can_tim = 3;

// Gọi hàm tim_vi_tri_phan_tu và in kết quả ra màn hình
$vi_tri_tim_thay = tim_vi_tri_phan_tu($mang_ban_dau, $gia_tri_can_tim);
echo "Vị trí của phần tử $gia_tri_can_tim trong mảng là: $vi_tri_tim_thay";
echo "<br>";

// Cau 15: Viết chương trình PHP để đảo ngược một chuỗi.

function dao_nguoc_chuoi($chuoi) {
    // Sử dụng hàm strrev để đảo ngược chuỗi
    return strrev($chuoi);
}

// Chuỗi ban đầu
$chuoi_ban_dau = "Bau Bau Studio chao ban!";

// Gọi hàm dao_nguoc_chuoi và in kết quả ra màn hình
$chuoi_dao_nguoc = dao_nguoc_chuoi($chuoi_ban_dau);
echo "Chuỗi sau khi đảo ngược: $chuoi_dao_nguoc";
echo "<br>";

// Cau 16 Viết chương trình PHP để tính số lượng phần tử trong một mảng.

function dem_so_luong_phan_tu($mang) {
    // Sử dụng hàm count để đếm số lượng phần tử trong mảng
    return count($mang);
}

// Mảng 
$mang = array(1, 2, 3, 4, 5);

// Gọi hàm dem_so_luong_phan_tu và in kết quả ra màn hình
$so_luong_phan_tu = dem_so_luong_phan_tu($mang);
echo "Số lượng phần tử trong mảng là: $so_luong_phan_tu";

// Câu 17: Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function isPalindrome($string) {
    $reversed = strrev($string);
    return $string === $reversed;
  }
  $string = "BauBau";
  $isPalindrome = isPalindrome($string);
  echo "<br>";
  echo $isPalindrome ? "'BauBau' là chuỗi Palindrome" : "'BauBau' không phải là chuỗi Palindrome";

// Câu 18: Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function countOccurrences($array, $element) {
    $count = 0;
    for ($i = 0; $i < count($array); $i++) {
      if ($array[$i] === $element) {
        $count++;
      }
    }
    return $count;
  }
  $array = array(1, 2, 3, 1, 2, 3);
  $count = countOccurrences($array, 1);
  echo "<br>";
  echo $count;

// Câu 19: Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function sxep_giam_dan($mang) {
    arsort($mang);
    return $mang;
}

// Mảng
$mang = array(5, 12, 9, 11, 7, 4, 3);

$mang_sau_xep = sxep_giam_dan($mang);

echo "Mảng sau khi sắp xếp giảm dần: ";
print_r($mang_sau_xep);

// Câu 20: Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
function addElementToStart($array, $element) {
    array_unshift($array, $element);
    return $array;
  }
  function addElementToEnd($array, $element) {
    array_push($array, $element);
    return $array;
  }
  $array = array(1, 2, 3, 4, 5);
  $array = addElementToStart($array, 10);
  echo "<br>";
  echo implode(", ", $array);
  
  $array = addElementToEnd($array, 11);
  echo "<br>";
  echo implode(", ", $array);
  echo "<br>";

  // Câu 21: Viết chương trình PHP để tìm số lớn thứ hai trong một mảng. -->
 function tim_so_lon_thu_hai($mang) {
    // Kiểm tra xem mảng có ít nhất 2 phần tử không
    if (count($mang) < 2) {
        return;
    }

    // Sắp xếp mảng theo thứ tự giảm dần
    rsort($mang);

    // Lấy số lớn thứ hai (phần tử thứ 1 sau khi sắp xếp)
    $so_lon_thu_hai = $mang[1];

    return $so_lon_thu_hai;
}

// Mảng
$mang = array(5, 7, 6, 1, 10, 4, 12, 9);

// Gọi hàm tim_so_lon_thu_hai và in kết quả ra màn hình
$so_lon_thu_hai = tim_so_lon_thu_hai($mang);

echo "Số lớn thứ hai trong mảng là: $so_lon_thu_hai";
echo "<br>";

// Câu 22: Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
// bài này e ko hiểu ạ hic

// Câu 23: Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không. -->

function ktra_so_hoan_hao($so) {
    if ($so <= 0) {
        return false;
    }

    $tong_uoc = 0;

    for ($i = 1; $i <= $so / 2; $i++) {
        if ($so % $i == 0) {
            $tong_uoc += $i;
        }
    }

    return $tong_uoc == $so;
}

// Số cần kiểm tra
$so_ktra = 21;

if (ktra_so_hoan_hao($so_ktra)) {
    echo "$so_ktra là số hoàn hảo.";
} else {
    echo "$so_ktra không là số hoàn hảo.";
}

// Câu 24: Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng. 

function tim_so_le_lon_nhat($mang) {
    $so_le_lon_nhat = null;

    foreach ($mang as $so) {
        // Kiểm tra xem số hiện tại có phải là số lẻ và lớn hơn số lẻ lớn nhất hiện tại không
        if ($so % 2 != 0 && ($so_le_lon_nhat === null || $so > $so_le_lon_nhat)) {
            $so_le_lon_nhat = $so;
        }
    }

    return $so_le_lon_nhat;
}

// Mảng 
$mang= array(5, 7, 12, 8, 15);

// Gọi hàm tim_so_le_lon_nhat và in kết quả ra màn hình
$so_le_lon_nhat = tim_so_le_lon_nhat($mang);

if ($so_le_lon_nhat !== null) {
    echo "Số lẻ lớn nhất trong mảng là: $so_le_lon_nhat";
} else {
    echo "Trong mảng không có số lẻ";
}

// Câu 25: Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function kiem_tra_so_nguyen_to($n) {
    // Kiểm tra nếu $n là số nguyên tố
    if ($n < 2) {
        return false; // Số nhỏ hơn 2 không phải là số nguyên tố
    }

    for ($i = 2; $i <= $n - 1; $i++) {
        // Nếu $n chia hết cho một số từ 2 đến n-1, không phải là số nguyên tố
        if ($n % $i == 0) {
            return false;
        }
    }

    return true; // Nếu không chia hết cho bất kỳ số nào, là số nguyên tố
}

// Số cần kiểm tra
$so_can_kiem_tra = 19;

// Gọi hàm kiem_tra_so_nguyen_to và in kết quả ra màn hình
if (kiem_tra_so_nguyen_to($so_can_kiem_tra)) {
    echo "$so_can_kiem_tra là số nguyên tố.";
} else {
    echo "$so_can_kiem_tra không là số nguyên tố.";
}

// Câu 26: Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.

function tim_so_duong_lon_nhat($mang) {
    $so_duong_lon_nhat = null;

    foreach ($mang as $so) {
        
        if ($so > 0 && ($so_duong_lon_nhat === null || $so > $so_duong_lon_nhat)) {
            $so_duong_lon_nhat = $so;
        }
    }

    return $so_duong_lon_nhat;
}

// Mảng
$mang = array(11, 2, 3, 1, -10, 4, 7, 9);

// Gọi hàm tim_so_duong_lon_nhat và in kết quả ra màn hình
$so_duong_lon_nhat = tim_so_duong_lon_nhat($mang);

if ($so_duong_lon_nhat !== null) {
    echo "Số dương lớn nhất trong mảng là: $so_duong_lon_nhat";
} else {
    echo "Trong mảng không có số dương";
}

// Câu 27: Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function tim_so_am_lon_nhat($mang) {
    $so_am_lon_nhat = null;

    foreach ($mang as $so) {
      
        if ($so < 0 && ($so_am_lon_nhat === null || $so > $so_am_lon_nhat)) {
            $so_am_lon_nhat = $so;
        }
    }

    return $so_am_lon_nhat;
}

// Mảng 
$mang = array(-1, -2, -3, -5, -4, -8, -7, -9);

// Gọi hàm tim_so_am_lon_nhat và in kết quả ra màn hình
$so_am_lon_nhat = tim_so_am_lon_nhat($mang);

if ($so_am_lon_nhat !== null) {
    echo "Số âm lớn nhất trong mảng là: $so_am_lon_nhat";
} else {
    echo "Trong mảng ko có số âm";
}

// Câu 28: Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.

function tinh_tong_so_le($n) {
    $tong = 0;
    for ($i = 1; $i <= $n; $i = $i + 2) {
        $tong += $i;
    }
    return $tong;
}
$n = 5;

$tong_so_le = tinh_tong_so_le($n);
echo "Tổng các số lẻ từ 1 đến $n là: $tong_so_le";
echo "<br>";

// Câu 29: Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
function tim_so_chinh_phuong($bdau, $kthuc) {
    for ($i = $bdau; $i <= $kthuc; $i++) {
        $can_bac_2 = sqrt($i);
        if ($can_bac_2 == (int)$can_bac_2) {
            echo "$i là số chính phương.<br>";
        }
    }
}
// Khoảng cần kiểm tra
$bdau = 2;
$kthuc = 50;
// Gọi hàm tim_so_chinh_phuong
tim_so_chinh_phuong($bdau, $kthuc);
echo "<br>";

 // Câu 30: Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function kiem_tra_chuoi_con($chuoi_bd, $chuoi_con) {
    $vi_tri = strpos($chuoi_bd, $chuoi_con);
    return $vi_tri !== false;
}

// Chuỗi ban đầu
$chuoi_bd = "Bau Bau Studio chao ban!";
// Chuỗi con cần kiểm tra
$chuoi_con = "Studio";

// Gọi hàm kiem_tra_chuoi_con và in kết quả ra màn hình
if (kiem_tra_chuoi_con($chuoi_bd, $chuoi_con)) {
    echo "$chuoi_con là chuỗi con của $chuoi_bd.";
} else {
    echo "$chuoi_con không là chuỗi con của $chuoi_bd.";
} 