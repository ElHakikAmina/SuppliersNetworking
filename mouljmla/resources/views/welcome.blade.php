@extends('layouts.default')
@section('content')
   <div style="background-color:#34081B;" class="flex flex-col md:flex-row">
        <div class="w-3/5">
            <div  style="color:#FDE6B5;" class="mt-9 ml-20 right-7 text-4xl">La naissance des projets commence ici</div>
            <div  style="color:#FDE6B5;" class=" mt-9 ml-20 text-3xl  ">Un réseau qui rassemble tous les fournisseurs et marchands du Maroc</div>
            <div class="mt-16 ml-40"><button class="px-16 py-3" style="background-color:#9E1852; color:#FDE6B5;">Voir plus</button></div>
        </div>
        <div class="mt-20 mb-9 w-2/5"><img src="/assets/supplier.png" alt=""></div>
        
    </div>
    <div class="flex flex-col md:flex-row md:justify-between my-9 py-5 px-5">
        <div class="text-center mx-auto my-5 robotoBold">
            <img src="/assets/icone/qualityIcon.png" style="width:100px; height:60px;" alt="">
            <br>
            Qualité de sevice
        </div>
        <div class="text-center mx-auto my-5 robotoBold">
            <img src="/assets/icone/deliveryIcon.png" style="width:100px; height:60px;" alt="">
            <br>
            La livraison par tout
        </div>
        <div class="text-center mx-auto my-5 robotoBold">
            <img src="/assets/icone/speedIcon.jpg" style="width:100px; height:60px;" alt="">
            <br>
            Votre temps est chére
        </div>
        <div class="text-center mx-auto my-5 robotoBold">
            <img src="/assets/icone/supplierIcon.png" style="width:100px; height:60px;" alt="">
            <br>
            Trouvez votre fournisseur
        </div>
        <div class="text-center mx-auto my-5 robotoBold">
            <img src="/assets/icone/supportIcon.png" style="width:100px; height:60px;" alt="">
            <br>
            Support 7/7
        </div>
    </div>
    <div class="text-center robotoBold text-4xl my-16">Vous obtenez tout ce dont vous avez besoin pour démarrer votre entreprise</div>
    <div class="flex flex-col md:flex-row flex-wrap">
        <div class="w-1/2" ><img src="/assets/icone/consomation.jpg" alt="" style="height:280px;"></div>
        <div class="w-1/2" ><img src="/assets/icone/makeups.jpg" alt="" style="height:280px;"></div>
        <div class="w-1/2" ><img src="/assets/icone/product3.jfif" alt="" style="height:280px;"></div>
        <div class="w-1/2" ><img src="/assets/icone/products2.jpg" alt="" style="height:280px;"></div>
    </div>
    <div class="flex flex-col md:flex-row flex-wrap justify-around p-4">
        <div class="flex flex-row p-5 m-2" style="width:500px; border:1px solid gray;">
            <div class="px-5"><img src="/assets/icone/argan.png" alt="" style="width:170px; height:100px;"></div>
            <div class="flex flex-col">
                <div class="mb-3">TAFYOUGHT</div>
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</div>
            </div>
        </div>
        {{--  --}}
        <div class="flex flex-row p-5 m-2" style="width:500px; border:1px solid gray;">
            <div class="px-5"><img src="/assets/icone/argan.png" alt="" style="width:170px; height:100px;"></div>
            <div class="flex flex-col">
                <div class="mb-3">TAFYOUGHT</div>
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</div>
            </div>
        </div>
        {{--  --}}
        <div class="flex flex-row p-5 m-2" style="width:500px; border:1px solid gray;">
            <div class="px-5"><img src="/assets/icone/argan.png" alt="" style="width:170px; height:100px;"></div>
            <div class="flex flex-col">
                <div class="mb-3">TAFYOUGHT</div>
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</div>
            </div>
        </div>
        {{--  --}}
        <div class="flex flex-row p-5 m-2" style="width:500px; border:1px solid gray;">
            <div class="px-5"><img src="/assets/icone/argan.png" alt="" style="width:170px; height:100px;"></div>
            <div class="flex flex-col">
                <div class="mb-3">TAFYOUGHT</div>
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</div>
            </div>
        </div>
    </div>
@stop