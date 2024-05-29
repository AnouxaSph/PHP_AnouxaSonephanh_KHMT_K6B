@extends('layout.master');
@section('Content')
@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}

</div>
@endif
<form action="insertProduct" method="post" enctype="multipart/form-data">

    <div>
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <div class="mb-3">
            <label for="" class="form-label">ID Product</label>
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
            <label for="" class="form-label">Product Name</label>
            <input
                type="text"
                class="form-control"
                name="pname"
                id=""
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

        <div class="mb-3">
            <label for="" class="form-label">Select Band</label> <br>
            <select
                class="form-select form-select-lg"
                name="selectBand"
                id=""
            >
                <option selected>Select one</option>
                <option value="Tinnitus Relief">Tinnitus Relief</option>
                <option value="Aralast">Aralast</option>
                <option value="Kay">Kay</option>
                <option value="EPOGEN">EPOGEN</option>
                <option value="Assured">Assured</option>
            </select>
        </div>  

        <div class="mb-3">
            <label for="" class="form-label">Select Year</label> <br>
            <select
                class="form-select form-select-lg"
                name="selectYear"
                id=""
            >
                <option selected>Select one</option>
                <?php
                    for ($year = 2015; $year <= 2030; $year++) {
                        echo '<option value="' . $year . '">' . $year . '</option>';
                    }
                ?>
            </select>
        </div>  
        

        <div class="mb-3">
            <label for="" class="form-label">Choose Image</label>
            <input
                type="file"
                class="form-control"
                name="img"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>
        
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-info" name="btInsert">Insert</button>
    </div>
</form>
@endsection