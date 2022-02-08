@isset($attorneyGeneral)


    <div class="col-12 col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h2 class="page-name">Capa Actual</h2>
            </div>

        </div>
        <div class="card-deck mb-4">

            <div class="card border-0 bg-transparent">
                <div class="card-img-top img-fluid rounded"
                    style='background-image:url("/storage/{{ $attorneyGeneral->photo }}");background-position:center;background-size:cover;height:200px;'>
                </div>

            </div> <!-- .card -->


        </div> <!-- .card-deck -->
    </div>
@endisset

<div class="col-md-5">
    <div class="form-group">
        <label for="name">Nome do Procurador Geral</label>
        <input type="text" name="name" id="name" value="{{ isset($attorneyGeneral->name) ? $attorneyGeneral->name : old('name') }}"
            class="form-control border-secondary" placeholder="nome" required>
    </div>
</div> <!-- /.col -->



<div class="col-md-5">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label border-secondary" for="image">Selecione a Capa</label>
            <input type="file" class="form-control" name="photo" value="{{ old('photo') }}" id="image">

        </div>
    </div>
</div> <!-- /.col -->

<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-name">Corpo da Matéria</h5>
            <p>Digite o corpo da matéria</p>
            <!-- Create the editor container -->
            <textarea name="description" id="editor1" style="min-height:300px; min-width:100%" >
                {{ isset($attorneyGeneral->description) ? $attorneyGeneral->description : old('description')}}
            </textarea>
        </div>
    </div>
</div>
