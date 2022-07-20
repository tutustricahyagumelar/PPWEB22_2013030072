<?php
include('koneksi.php');
if($_POST["query"] != '') {
    $search_array = explode(",", $_POST["query"]); 
    $search_text = "'" . implode("', '", $search_array) . "'";
    $query = $conn->query("SELECT * FROM item WHERE nama IN (".$search_text.") ORDER BY id DESC");
}else{
    $query = $conn->query("SELECT * FROM item ORDER BY nama DESC");
}
$total_row = mysqli_num_rows($query);
$output = '';
if($total_row > 0)
   while ($row = $query ->fetch_object()) {
        $output .= '
        <tr>
            <td >'.$row->id.'</td>
            <td>'.$row->barcode.'</td>
            <td>'.$row->nama.'</td>
            <td>'.$row->satuan.'</td>
            <td>'.$row->harga.'</td>
        </tr>';
    }
echo $output;
?>