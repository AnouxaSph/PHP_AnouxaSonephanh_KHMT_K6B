<?php
//kiem tra xam form da dc gui di hay chua
if($_SERVER['REQUEST_METHOD']=="POST"){
    //xu ly du lieu formo day

    //gan gia tri cho action sau khi xu ly form
    $newAction= "";
}else{
    //gia tri action ban dau
    $newAction = "./isner";
}
?>
<form method="post" enctype="multipart/form-data" action="<?php echo $newAction; ?>">
    <div class="mb-3">
        <label for="" class="form-label">Id Product</label>
        <input
            type="text"
            class="form-control"
            name="id"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Product Name</label>
        <input
            type="text"
            class="form-control"
            name=""
            id="pname"
            aria-describedby="helpId"
            placeholder=""
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Company</label>
        <input
            type="text"
            class="form-control"
            name="company"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
    </div>
    <div class="mb-3 mt-3">
        <label for="" class="form-label">Select Band</label>
        <select class="form-select form-select-lg" name="band" id="">
            <option value="Oxycodone and Acetaminophen">Oxycodone and Acetaminophen</option>
            <option value="ANTIBACTERIAL FOAMING">ANTIBACTERIAL FOAMING</option>
            <option value="Terazosin">Terazosin</option>
            <option value="Cardinal Health Antimicrobial Soap with Triclosan">Cardinal Health Antimicrobial Soap with Triclosan</option>
            <option value="LBEL FILLING EFFECT FOUNDATION SPF 10">LBEL FILLING EFFECT FOUNDATION SPF 10</option>
        </select>
    </div>
    <div class="mb-3 mt-3">
        <label for="" class="form-label">Select Year</label>
        <select class="form-select form-select-lg" name="year" id="">
            <label for="" class="form-label">Select Company</label>
                <?php
                    for($year=2015; $year<=2050; $year++){
                        
                        echo '<option value="'.$year.'">'.$year.'</option>';
                    }
                ?>
        </select>
    </div>
    <div>
    <label for="formFileLg" class="form-label">choose file</label>
    <input class="form-control form-control-lg" id="formFileLg" type="file" name="imageFile">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary" name="btInsert">
            Insert
        </button>
    </div>
</form>
<?php
    if(isset($data["result"])){
        if($data["result"]){
            echo "them moi thanh cong";

        }else{
            echo " them moi khong thah cong";
        }
    }
?>