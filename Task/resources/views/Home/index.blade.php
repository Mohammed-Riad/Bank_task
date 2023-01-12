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
            <div>
                <h1 class="h1"> Insert Information</h1>
            </div>
            <table class="table" style="margin-top: 30px">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Account</th>
                        <th scope="col">Credit Side</th>
                        <th scope="col">Debit Side</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
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
                            <input type="text" name="first_credit_amount" value="0.00" class="form-control">

                        </td>
                        <td>
                            <input type="text" name="first_debit_amount" value="0.00" class="form-control">

                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
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
                            <input type="text" name="second_credit_amount" value="0.00" class="form-control">

                        </td>
                        <td>
                            <input type="text" name="second_debit_amount" value="0.00" class="form-control">

                        </td>
                    </tr>

                </tbody>
            </table>

            <input type="submit" class="btn btn-dark" style="width: 200px">

        </form>
        <div>
            {{-- End  Insert --}}


            <hr class="hr">


            {{-- Start  Show informatiom --}}

            <div class="two" style="margin-top:60px">
                <div>
                    <h1 class="h1"> Bank Information</h1>
                </div>

                <table class="table" style="margin-top: 30px">
                    <thead>
                        <tr>
                            <th scope="col">First Person</th>
                            <th scope="col">Second Person</th>
                            <th scope="col">Credit Amount</th>
                            <th scope="col">Debit Amount</th>
                            <th scope="col">Creditor</th>
                            <th scope="col">Debtors</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

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
                            <td>
                                <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                    href='DeleteBankAcount/{{ $Transaction->id }}' class="btn btn-danger"
                                    onclick="return confirm('Are you sure')">
                                    <i class="material-icons text-sm me-2" title="Delete">delete</i>

                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>

            {{-- End  Show informatiom --}}
        </div>
    @endsection
    {{-- End Section --}}
