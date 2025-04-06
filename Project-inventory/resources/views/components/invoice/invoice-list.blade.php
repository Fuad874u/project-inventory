
<div class="container-fluid">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-lg-12">
        <div class="card px-5 py-5">
            <div class="row justify-content-between ">
                <div class="align-items-center col">
                    <h5>Invoices</h5>
                </div>
                <div class="align-items-center col">
                    <a    href="{{url("/salePage")}}" class="float-end btn m-0 bg-gradient-primary">Create Sale</a>
                </div>
            </div>
            <hr class="bg-dark "/>
            <table class="table" id="tableData">
                <thead>
                <tr class="bg-light">
                    <th>No</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Total</th>
                    <th>Vat</th>
                    <th>Discount</th>
                    <th>Payable</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody id="tableList">
                    <tr class="bg-light">
                        <th>01</th>
                        <th>Fuad</th>
                        <th>0140*****64</th>
                        <th>$23.55</th>
                        <th>5%</th>
                        <th>20%</th>
                        <th>$10</th>
                        <th><button style="margin-right: 0px; border-radius: 6px;" class="bg-danger">Edit</button></button><button style="margin-left: 0px; border-radius: 6px;"  class="bg-success">Update</button></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
