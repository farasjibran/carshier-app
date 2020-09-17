$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });

    let currentOrder = []
    let totalprice = 0

    $("div .item-cashier").on('click', function () {
        let id = $(this).data('id');
        let foodname = $(this).data('name');
        let price = $(this).data('price');
        let image = $(this).data('image');
        console.log("adding to order")
        addToCurrentOrder(foodname, id, price, image)
    })

    function addToCurrentOrder(foodname, id, price, image) {
        totalprice += price
        currentOrder.push({
            'id': id,
            'qty': 1,
            'price': price
        })
        let component = `
        <div class="row px-2 current-order mb-2">
        <img style="border-radius: 15px !important; width: 60px !important;" class="rounded col-2 p-0" src="img/${image}" alt="...">
        <p class="col-3 mb-0 text-wrap font-weight-bold text-dark">${foodname}</p>
        <div class="input-group col-4 ">
            <span class="input-group-btn">
                <button type="button" class="btn btn-number" data-type="minus" data-field="quant[2]">
                    <i class="fas fa-minus"></i>
                </button>
            </span>
            <input type="text" name="quant[2]" class="form-control input-number" value="1" min="1" max="100">
            <span class="input-group-btn">
                <button type="button" class="btn  btn-number" data-type="plus" data-field="quant[2]">
                    <i class="fas fa-plus"></i>
                </button>
            </span>
        </div>
        <p class="col-3">Rp ${price}</p>
        </div>
        `

        $('#current-order').append(component)

    }

    $("#pay").on('click', function () {
        $.ajax({
            type: "POST",
            data: {
                order: currentOrder,
                totalprice: totalprice
            },
            url: "carshier",
            success: function (msg) {
                console.log(msg)
                alert('berhasil')
                window.location.reload();
            },
            error: function (msg) {
                console.log(msg)
                alert("There was an error. Try again please!");
            }
        });
    })

});
