@extends('layouts.package')
@section('content')

<!-- <div class="container"> -->
    <form action="/paperbox" method="post">
        @csrf
        <div class="container-fluid row m-0 p-0">
            <div class="col-lg-6">
                <h3>User setting</h3>
                <div class="row">
                    <div class="col">
                        <label for="sel1">Finished product size length * width * height (mm):</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" value="100" class="form-control" id="productSize1" name="productSize1">
                    </div>
                    <div class="col">
                        <input type="text" value="50" class="form-control" id="productSize2" name="productSize2">
                    </div>
                    <div class="col">
                        <input type="text" value="150" class="form-control" id="productSize3" name="productSize3">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="sel1">Printing quantity * variety:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" value="1000" class="form-control" id="printQuantity1" name="printQuantity1">
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col">
                        <label for="sel1">Material*gram weight:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <select class="form-control" id="Material1" name="material1">
                                <option selected value="16">SBS</option>
                                <option value="17">Kraft Paper</option>
                                <option value="14">C2S</option>
                                <option value="278">CCNB</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <select class="form-control" id="Material2" name="material2">
                                <option value="230">230</option>
                                <option selected value="250">250</option>
                                <option value="300">300</option>
                                <option value="350">350</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button id="submit" type="submit" class="btn btn-primary mt-3">Self quotation</button> 
            </div>
            <div class="col-lg-6 row" >
                <div class="col-12">
                    <h3>Backdesk setting</h3>
                    <div class="row">
                        <div class="col">
                            <label for="sel1">glued Size (mm):</label>
                        </div>
                        <div class="col">
                            <label for="sel1">flap Size (mm):</label>
                        </div>
                        <div class="col">
                            <label for="sel1">bleed Size (mm):</label>
                        </div>
                        <div class="col">
                            <label for="sel1">fixed Size (mm):</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" value="15" class="form-control" id="gluedSize" name="gluedSize">
                        </div>
                        <div class="col">
                            <input type="text" value="15" class="form-control" id="flapSize" name="flapSize">
                        </div>
                        <div class="col">
                            <input type="text" value="3" class="form-control" id="bleedSize" name="bleedSize">
                        </div>
                        <div class="col">
                            <input type="text" value="10" class="form-control" id="fixedSize" name="fixedSize">
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="sel1">Print plate 1 paper size (mm * mm):</label>
                        </div>
                        <div class="col">
                            <label for="sel1">Print plate 2 paper size (mm * mm):</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" value="889" class="form-control" id="print1PaperSizeW" name="print1PaperSizeW">
                        </div>
                        <div class="col">
                            <input type="text" value="700" class="form-control" id="print1PaperSizeH" name="print1PaperSizeH">
                        </div>
                        <div class="col">
                            <input type="text" value="787" class="form-control" id="print2PaperSizeW" name="print2PaperSizeW">
                        </div>
                        <div class="col">
                            <input type="text" value="700" class="form-control" id="print2PaperSizeH" name="print2PaperSizeH">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="sel1">If smaller than 5000: Paper wastage Number:</label>
                        </div>
                        <div class="col">
                            <label for="sel1">Paper cost (yuan):</label>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" value="300" class="form-control" id="paperwastageNumber" name="paperwastageNumber">
                        </div>
                        <div class="col">
                            <input type="text" value="7" class="form-control" id="paperCost" name="paperCost">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="mt-3" id="ajaxdata"></div>
<!-- </div> -->
<script>
    $( "form" ).on( "submit", function( event ) {
        event.preventDefault()
        
        // alert('prevent');
        // var ua = window.navigator.userAgent;
        // var msie = ua.indexOf("MSIE ");
        // if (msie > 0) {
        //     // Use Microsoft XDR
        //     alert('okay IE');
        //     var xdr = new XDomainRequest();
        //     xdr.open("POST", '{{ route("postpaperbox") }}');
        //     xdr.onload = function () {
        //     var JSON = $.parseJSON(xdr.responseText);
        //     if (JSON == null || typeof (JSON) == 'undefined')
        //     {
        //         JSON = $.parseJSON(data.firstChild.textContent);
        //     }
        //     alert(JSON);
        //     displayresponse(JSON);  
        //     };
        //     xdr.send();
        // } else {
        // alert('okay GC');
        console.log('please ajax!')
        $.ajax({
            url: '{{ route("postpaperbox") }}',
            method:"POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            // ContentType: "application/x-www-form-urlencoded; Charset=utf-8 ",
            data:$(this).serialize(),
            dataType:"json",
            beforeSend:function()
            {
                $(".loader").css("display","flex");
            },
            success:function(data)
            {
                $(".loader").css("display","none");
                console.log('data',data);
                let print_quantity = $('#printQuantity1').val();
                // debugger;
                if(data.success == false){
                    html = `
                        <div class='row container-fluid  mx-auto'>
                            
                            <div class="formula-area col-6">
                                <p style="font-size:1.2rem; font-weight:bold;">` + "Size error" + `</p>
                            </div>
                        </div>
                        `;
                }
                else{
                    html = `
                        <div class='row container-fluid  mx-auto'>
                            
                            <div class="formula-area col-6">
                                <p style="font-size:1.2rem; font-weight:bold;">` + data + `</p>
                            </div>
                        </div>
                        `;
                }
                html = `
                    <div class='row container-fluid  mx-auto'>
                        
                        <div class="formula-area col-6">
                            <p style="font-size:1.2rem; font-weight:bold;">` + data + `</p>
                        </div>
                    </div>
                    `;
                $('#ajaxdata').html(html);
                // displayresponse(data);                
            }
        });
        // }
    });
    function displayresponse(data){
        $(".loader").css("display","none");
        let print_quantity = $('#printQuantity1').val();
        html = `
        <div class='row container-fluid  mx-auto'>
            <table class='table table-bordered col-6'>
                <thead>
                    <tr>
                        <th>Quantity</th>
                        <th>Full amount (yuan)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>`+ parseInt(print_quantity) + `</td>
                        <td>`+ parseInt(data) +`</td>
                    </tr>
                </tbody>
            </table>
            <div class="formula-area col-6">
                <p style="font-size:1.2rem; font-weight:bold;">` + parseInt(data) + `</p>
            </div>
        </div>
        `;
        
        $('#ajaxdata').html(html);
    }
    
</script>
@endsection