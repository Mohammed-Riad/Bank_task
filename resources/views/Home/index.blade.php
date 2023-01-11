@extends('Master.master')

{{-- Start Section --}}

@section('section')
    {{-- Start Table --}}

    <form action="/Add" method="post" role="form">
        @csrf

        <br><br>

        <label for="">Name</label>
        <select name="name">
            <option value="mohammed">mohammed</option>
            <option value="riad">riad</option>
            <option value="rose">rose</option>
            <option value="laith">laith</option>
            <option value="abood">abood</option>
            <option value="khald">khald</option>
            <option value="turkeh">turkeh</option>
            <option value="anzor">anzor</option>
        </select>

        <br><br>
        <label for="">credit_amount</label>
        <input type="text" name="credit_amount" value="0.00">

        <br><br>
        <label for="">debit_amount</label>
        <input type="text" name="debit_amount" value="0.00">

        <br><br>
        <input type="submit">



    </form>

    {{-- End  Tabel --}}


    @foreach ($Transactions as $Transaction)
        {{ $Balance = $Transaction->debit_amount - $Transaction->credit_amount  }}
        <h1>{{ $Balance }} {{$Transaction->debit_amount}} {{$Transaction->credit_amount}}  {{$Transaction->name}}</h1>
    @endforeach
@endsection

{{-- Start Section --}}


<style>


</style>
