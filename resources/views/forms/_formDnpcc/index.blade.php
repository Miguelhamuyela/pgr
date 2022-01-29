

<div class="col-md-8">
    <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" value="{{ isset($dnpcc->title) ? $dnpcc->title : old('title') }}"
            class="form-control border-secondary" placeholder="Titulo" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-4">
    <div class="form-group">
        <label for="initials">Sigla/Acrônimo</label>
        <input type="text" name="initials" id="initials" value="{{ isset($dnpcc->initials) ? $dnpcc->initials : old('initials') }}"
            class="form-control border-secondary" placeholder="Sigla/Acrônimo" required>
    </div>
</div> <!-- /.col -->


<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Descrição</h5>
            <p>Digite a Descrição</p>
            <!-- Create the editor container -->
            <textarea name="description" id="editor1" style="min-height:300px; min-width:100%" >
                {{ isset($dnpcc->description) ? $dnpcc->description : old('description')}}
            </textarea>
        </div>
    </div>
</div>
