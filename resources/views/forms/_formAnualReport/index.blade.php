

<div class="col-md-12">
    <div class="form-group">
        <label for="title">Titulo do relatório</label>
        <input type="text" name="title" id="title" value="{{ isset($AnnualReport->title) ? $AnnualReport->title : '' }}"
            class="form-control border-secondary" placeholder="Titulo do relatóri" required>
    </div>
</div> <!-- /.col -->
<div class="col-md-12">
    <div class="form-group">
        <label for="file">Selecione o ficheiro</label>
        <input type="file" name="file" id="file" value="{{ isset($AnnualReport->file) ? $AnnualReport->file : '' }}"
            class="form-control border-secondary">
    </div>
</div> <!-- /.col -->
