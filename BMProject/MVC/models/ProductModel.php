<?php 
class ProductModel extends dbProduct
{
    public function getRecords($tablename)
    {
        $qr = "SELECT * FROM $tablename";
        return mysqli_query($this->con, $qr);
    }
    
    // tim kiem nhieu ban ghi theo 1 truong
    public function getRecordsbyField($tblname, $field, $keyword)
    {
        $qr = "SELECT * FROM $tblname where $field = '$keyword' ";
        return mysqli_query($this->con, $qr);
    }
    public function insertProduct ($id, $pname, $company, $year, $band, $pimage)
    {
        $result = false;
        $sql = "insert into tblProduct(pid, pname, company, year, band, pimage)
                            values('$id','$pname','$company','$year','$band','$pimage')";
        if (mysqli_query($this->con, $sql)) {

        }
        return json_decode($result);
    }
}
?>
