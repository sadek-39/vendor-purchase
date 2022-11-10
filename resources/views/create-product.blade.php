<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{asset('customjs/custom-script.js')}}"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body class="antialiased">
<div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

    <form>
        <div class="form-group">
            <label for="item_name">Item Name</label>
            <input type="text" class="form-control" id="item_name" name="item_name"
                   placeholder="Enter item name">
        </div>
        <div class="form-group">
            <label for="item_quantity">Quantity</label>
            <input type="number" class="form-control" id="item_quantity" name="item_quantity" placeholder="Enter item quntity">
        </div>
        <div class="form-group">
            <label for="unit_price">Unit Price</label>
            <input type="number" class="form-control" id="unit_price" name="unit_price" placeholder="Enter Unit Price">
        </div>
        <div class="form-group">
            <label for="total_price">Total Price</label>
            <input type="text" class="form-control" id="total_price" name="total_price" placeholder="Enter total price" readonly>
        </div>
        <select name="vendor_id" class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>

        </select>

        <button type="submit" id="submitbtn" class="btn btn-primary">Submit</button>
    </form>

</div>
<div id="msg"></div>
<div class="container" >
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Item Name</th>
            <th scope="col">Item quantity</th>
            <th scope="col">Item unit Price</th>
            <th scope="col">Total Price</th>
            <th scope="col">Vendor Name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>

</body>
<script>
    $(document).ready(function () {
        // jQuery methods go here...
        getAllVendors("/vendor");
        getAllProducts("/product");
    });

    $("#submitbtn").click(function(e){

        e.preventDefault();

        var item_name = $("input[name=item_name]").val();
        var item_quantity = $("input[name=item_quantity]").val();
        var unit_price = $("input[name=unit_price]").val();
        var total_price = $("input[name=total_price]").val();
        var vendor_id = $("select[name=vendor_id]").val();
        var _token   = $('meta[name="csrf-token"]').attr('content');
        if(item_name != "" && item_quantity !=""
            && unit_price !="" && total_price !="" && vendor_id !=""){
            let formData = {
                _token: _token,
                item_name:item_name,
                item_quantity:item_quantity,
                unit_price:unit_price,
                total_price:total_price,
                vendor_id:vendor_id
            }
            formSubmit('/product',formData,'POST');
        }else{
            swal("Please input all field",{
                icon:"warning"
            })
        }

    });
    $(document).on("change", "#unit_price,#item_quantity" , function() {
        let quantity = $('#item_quantity').val();
        if(!quantity){
            swal("Please enter quantity first").then(()=>{
                location.reload();
            })
        }else{
            let total_price = quantity * $("#unit_price").val();
            console.log(total_price)
            $('#total_price').val(total_price);
        }
    });


    $(document).on("click", ".edit" , function() {
        var edit_id = $(this).data('id');
        window.location.href = "{{url('product')}}"+"/"+edit_id +"/edit";
    });

    $(document).on("click", ".delete" , function() {
        var delete_id = $(this).data('id');
        let deleteUrl = "{{url('product')}}"+"/"+delete_id;
        let gelAllvendor =
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this product!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    deleteMethod('DELETE',deleteUrl);
                    swal("Poof! Your product has been deleted!", {
                        icon: "success",
                    }).then(()=>{
                        location.reload()
                    })
                } else {
                    swal("Your product is safe!");
                }
            });
    });

    function deleteMethod(methodType,url){
        $.ajax({
            type:methodType,
            url:url,
            data:{
                '_token': '{{ csrf_token() }}',
            },
            success:function(data){
                return data
            },
            error:function(data){
                return data
            }
        });
    }

    function getAllProducts(url){
        $.get({
            url: url, success: function (result) {
                // $("#" + dId).html(result);
                for (var d in result) {
                    var data = result[d];
                    $('tbody').append($('<tr>')
                        .append($('<td>', { text: data.item_name }))
                        .append($('<td>', { text: data.item_quantity }))
                        .append($('<td>', { text: data.unit_price }))
                        .append($('<td>', { text: data.total_price }))
                        .append($('<td>', { text: data.vendor.name }))
                        .append($('<td>' +
                            '<button class="btn btn-secondary mr-2 edit" id="editbtn_'+ data.id+'" data-id='+data.id+' >Edit</button>' +
                            '<button class="btn btn-danger delete" id="dltbtn_'+ data.id+'" data-id='+data.id+'>Delete</button>'))
                    )
                }
            }
        });
    }


    function getAllVendors(url) {
        $.get({
            url: url, success: function (result) {
                // $("#" + dId).html(result);
                for (var d in result) {
                    var data = result[d];
                    $('select')
                        .append(`<option value="${data.id}">
                                       ${data.name}
                                  </option>`)

                        .append($('<td>' +
                            '<button class="btn btn-secondary mr-2 edit" id="editbtn_'+ data.id+'" data-id='+data.id+' >Edit</button>' +
                            '<button class="btn btn-danger delete" id="dltbtn_'+ data.id+'" data-id='+data.id+'>Delete</button>'))

                }
            }
        });
    }
</script>

</html>
