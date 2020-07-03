@extends('property.master')

@section('content')

    <?php
    $property = $property[0];

    ?>
    <div class="container my-3">

        <h1>Fomulario de edição</h1>

        <form action="<?= url('/imoveis/update', ['id' => $property->id]); ?>" method="post">
            <?= csrf_field(); ?>
            <?= method_field('PUT'); ?>

            <div class="form-group">
                <labe for="tile">Titulo do imovel</labe>
                <input type="text" name="title" id="title" value="<?= $property->title; ?>" class="form-control">
            </div>

            <div class="form-group">
                <labe for="description">Descrição do imovel</labe>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"><?= $property->description; ?></textarea>
            </div>

            <div class="form-group">
                <labe for="rental_price">Valor de locação</labe>
                <input type="text" name="rental_price" id="rental_price" value="<?= $property->rental_price; ?>" class="form-control">
            </div>

            <div class="form-group">
                <labe for="sale_price">Valor de venda</labe>
                <input type="text" name="sale_price" id="sale_price" value="<?= $property->sale_price; ?>" class="form-control">
            </div>


            <button type="submit" class="btn btn-primary">Atualizar imovel</button>

        </form>
    </div>

@endsection
