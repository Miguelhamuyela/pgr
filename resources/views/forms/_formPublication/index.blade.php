

<div class="col-md-12">
    <div class="form-group">
        <label for="title">Titulo da Publicação</label>
        <input type="text" name="title" id="title" value="{{ isset($Publication->title) ? $Publication->title : '' }}"
            class="form-control border-secondary" placeholder="Titulo da Publicação" required>
    </div>
</div> <!-- /.col -->
<div class="col-md-12">
    <div class="form-group">
        <label for="file">Selecione o ficheiro</label>
        <input type="file" name="file" id="file" value="{{ isset($Publication->file) ? $Publication->file : '' }}"
            class="form-control border-secondary">
    </div>
</div> <!-- /.col -->
