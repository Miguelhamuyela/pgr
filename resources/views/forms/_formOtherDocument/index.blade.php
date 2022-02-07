

<div class="col-md-12">
    <div class="form-group">
        <label for="title">Titulo do Documento</label>
        <input type="text" name="title" id="title" value="{{ isset($OtherDocuments->title) ? $OtherDocuments->title : '' }}"
            class="form-control border-secondary" placeholder="Titulo do Documento" required>
    </div>
</div> <!-- /.col -->
<div class="col-md-12">
    <div class="form-group">
        <label for="file">Selecione o ficheiro</label>
        <input type="file" name="file" id="file" value="{{ isset($OtherDocuments->file) ? $OtherDocuments->file : '' }}"
            class="form-control border-secondary">
    </div>
</div> <!-- /.col -->
