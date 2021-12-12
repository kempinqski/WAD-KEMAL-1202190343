@extends('layout')

<?php $currentPage = '/';?>

@section('content')
    <h3 style="text-align:center;">About Us</h3>

    <div class="d-flex flex-row" style="margin-top:50px; margin-left:50px;">
        <div ><img src="{{ asset('foto/gambarvaksin.jpg') }}" style="width: 100%"></div>
        <div class="col-8" style="margin-top:50px;">Vaksin dibuat untuk mencegah penyakit. Vaksin COVID-19 adalah harapan terbaik untuk menekan penularan virus corona. Mendapatkan vaksin COVID-19 maka bisa melindungi tubuh dengan menciptakan respons antibodi di tubuh tanpa harus sakit karena virus corona. Vaksin COVID-19 mampu mencegah seseorang terkena virus corona. Atau, apabila kamu tertular COVID-19, 
                                                     vaksin dapat mencegah tubuh dari sakit parah atau potensi hadirnya komplikasi serius. Dengan mendapatkan vaksin, kamu juga akan membantu melindungi orang-orang di sekitar dari virus corona. Terutama bagi orang-orang yang berisiko tinggi terkena penyakit parah akibat COVID-19.</div>

    </div>
@endsection
    
