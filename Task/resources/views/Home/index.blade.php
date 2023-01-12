@extends('Master.master')

{{-- Start Section --}}

@section('section')
    <div class="container d-flex align-items-cente  flex-column">

        {{-- Start Alert --}}
        <div class="alert">
            @if (session()->has('errors'))
                <div class="alert alert-danger" style="text-align: center">{{ session()->get('errors') }}</div>
            @endif

            @if (session()->has('success'))
                <div class="alert alert-success" style="text-align: center">{{ session()->get('success') }}</div>
            @endif
        </div>
        {{-- End Alert --}}


        {{-- Start Insert --}}
        <form action="/Add" method="post" role="form">
            @csrf
            <div class="one">
                <div>
                    <h1 class="h1"> Insert Information</h1>
                </div>
                <div>
                    <table class="">
                        <tr class="heading">
                            <th>Account</th>
                            <th>Credit Side</th>
                            <th>Debit Side</th>
                        </tr>
                        <tr>
                            <td>
                                <select name="first_person">
                                    <option value="mohammed">mohammed</option>
                                    <option value="riad">riad</option>
                                    <option value="rose">rose</option>
                                    <option value="laith">laith</option>
                                    <option value="abood">abood</option>
                                    <option value="khald">khald</option>
                                    <option value="turkeh">turkeh</option>
                                    <option value="anzor">anzor</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="first_credit_amount" value="0.00"
                                    class="form-control">
                            </td>

                            <td>
                                <input type="text" name="first_debit_amount" value="0.00"
                                    class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select name="second_person" class="custom-file">
                                    <option value="mohammed">mohammed</option>
                                    <option value="riad">riad</option>
                                    <option value="rose">rose</option>
                                    <option value="laith">laith</option>
                                    <option value="abood">abood</option>
                                    <option value="khald">khald</option>
                                    <option value="turkeh">turkeh</option>
                                    <option value="anzor">anzor</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="second_credit_amount" value="0.00"
                                    class="form-control">
                            </td>
                            <td>
                                <input type="text" name="second_debit_amount" value="0.00"
                                    class="form-control">

                            </td>
                        </tr>
                    </table>
                </div>

                <input type="submit" class="btn btn-dark">

        </form>
        <div>
            {{-- End  Insert --}}


            <hr class="hr">


            {{-- Start  Show informatiom --}}
            <div class="two">
                <div>
                    <h1 class="h1"> Bank Information</h1>
                </div>
                <div>
                    <table class="">
                        <tr class="heading" style="background-color: black">
                            <th>First Person</th>
                            <th>Second Person</th>
                            <th>Credit Amount</th>
                            <th>Debit Amount</th>
                            <th>Creditor</th>
                            <th>Debtors</th>
                        </tr>

                        @foreach ($Transactions as $Transaction)
                            <tr>
                                <td>
                                    {{ $Transaction->first_person }}
                                </td>
                                <td>
                                    {{ $Transaction->second_person }}

                                </td>
                                <td>
                                    {{ $Transaction->credit_amount }}

                                </td>
                                <td>
                                    {{ $Transaction->debit_amount }}

                                </td>
                                <td>
                                    {{ $Transaction->creditor }}


                                </td>
                                <td>
                                    {{ $Transaction->debtors }}

                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>

            </div>
            {{-- End  Show informatiom --}}
        </div>
    @endsection
    {{-- Start Section --}}
