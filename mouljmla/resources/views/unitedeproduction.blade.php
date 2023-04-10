@extends('layouts.default')
@section('content')
   <div class="flex flex-col md:flex-row justify-around my-5 py-5" style="border-top:solid 1px #9e1852; border-bottom:solid 1px #9e1852; background-color:#9e18520b;">
        <div>
            <select name="" id="">
                <option value="">Ville</option>
            </select>
        </div>
        <div>
            <select name="" id="">
                <option value="">Catégorie</option>
            </select>
        </div>
        <div class="flex flex-row">
            <div><input type="checkbox"></div>
            <div><img src="/assets/icone/4stars.png" style="width:80px; height:20px;" alt=""></div> 
        </div>
        <div>
            <input type="checkbox"> Livraison gratuite
        </div>
        <div>
            <button>Recherche</button>
        </div>
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