@extends('user.layout.main')
@section('content')

<div class="d-flex my-5  justify-content-center">
    <button id="payment-button">Pay with Khalti</button>
</div>


<script>
    var config = {
        // replace the publicKey with yours
        "publicKey": "test_public_key_c04c30f5b52d433a8e659fedebed65c4",
        "productIdentity": "1234567890",
        "productName": "Dragon",
        "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
        "paymentPreference": [
            "KHALTI",
            "EBANKING",
            "MOBILE_BANKING",
            "CONNECT_IPS",
            "SCT",
        ],
        "eventHandler": {
            onSuccess(payload) {
                console.log(payload);
                var url = '/change-order-status/'+`{{$id}}`
                window.location.replace(url)
            },
            onError(error) {
                console.log(error);
            },
            onClose() {
                console.log('widget is closing');
            }
        }
    };

    var checkout = new KhaltiCheckout(config);
    var btn = document.getElementById("payment-button");
    btn.onclick = function() {
        checkout.show({
            amount: `{{$price}}` * 100
        });
    }
</script>
@endsection