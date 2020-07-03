@extends('property.master')

@section('content')
    <div class="container my-3">
        <h1>Fomulario de cadastro</h1>
        <form action="<?= url('/imoveis/store'); ?>" method="post">
            <?= csrf_field(); ?>
            <div class="form-group">
                <labe for="tile">Titulo do imovel</labe>
                <input type="text" name="title" id="title" class="form-control">
            </div>

            <div class="form-group">
                <labe for="description">Descrição do imovel</labe>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <labe for="rental_price">Valor de locação</labe>
                <input type="text" name="rental_price" id="rental_price" class="form-control">
            </div>

            <div class="form-group">
                <labe for="sale_price">Valor de venda</labe>
                <input type="text" name="sale_price" id="sale_price" class="form-control">
            </div>


            <button type="submit" class="btn btn-primary" >Cadastrar imovel</button>

        </form>
    </div>
@endsection
