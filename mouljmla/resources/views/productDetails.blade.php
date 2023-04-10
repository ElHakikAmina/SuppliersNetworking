@extends('layouts.default')
@section('content')
<div class="flex flex-col md:flex-row  p-5">
    <div class="w-4/5 md:w-1/3 m-5"><img src="assets/icone/backPack.jpg" alt="" class="" style="width:100%."></div>
    <div class="w-4/5 md:w-2/3 ">
        <div class="robotoBold text-3xl my-5">Lorem ipsum dolor sit amet</div>
        <div class="text-2xl">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
        <div class="flex flex-col md:flex-row">
            <div>
                <button style="background-color:#9E1852;"class=" text-white font-bold py-2 px-4 m-5">
                    Contacter Fournisseur
                </button>
            </div>
            <div><button class="text-white font-bold py-2 px-4 m-5" style="background-color:#549F6C;">Commander</button></div>
        </div>
    </div>
</div>
{{--  --}}
<div class="flex flex-col md:flex-row md:justify-between py-5 px-5">
    <div class="text-center mx-auto my-5 robotoBold">
        <img src="/assets/icone/qualityIcon.png" style="width:200px; height:100px;" alt="">
        <br>
        Qualité de sevice
    </div>
    <div class="text-center mx-auto my-5 robotoBold">
        <img src="/assets/icone/deliveryIcon.png" style="width:200px; height:100px;" alt="">
        <br>
        La livraison par tout
    </div>
    <div class="text-center mx-auto my-5 robotoBold">
        <img src="/assets/icone/speedIcon.jpg" style="width:200px; height:100px;" alt="">
        <br>
        Votre temps est chére
    </div>
    <div class="text-center mx-auto my-5 robotoBold">
        <img src="/assets/icone/supplierIcon.png" style="width:200px; height:100px;" alt="">
        <br>
        Trouvez votre fournisseur
    </div>
    <div class="text-center mx-auto my-5 robotoBold">
        <img src="/assets/icone/supportIcon.png" style="width:200px; height:100px;" alt="">
        <br>
        Support 7/7
    </div>
</div>
{{--  --}}
<div class="text-center robotoBold text-4xl my-7">Vous obtenez tout ce dont vous avez besoin pour démarrer votre entreprise</div>
    <div class="flex flex-col md:flex-row flex-wrap">
        <div class="w-1/2"><img src="/assets/icone/consomation.jpg" alt="" ></div>
        <div class="w-1/2"><img src="/assets/icone/makeups.jpg" alt="" ></div>
        <div class="w-1/2"><img src="/assets/icone/product3.jfif" alt="" ></div>
        <div class="w-1/2"><img src="/assets/icone/products2.jpg" alt="" ></div>
    </div>
@stop