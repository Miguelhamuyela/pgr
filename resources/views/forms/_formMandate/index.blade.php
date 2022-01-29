<div class="col-md-12">
    <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" value="{{ isset($mandates->title) ? $mandates->title : '' }}"
            class="form-control border-secondary" placeholder="Titulo" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Corpo da Matéria</h5>
            <p>Digite o corpo da matéria</p>
            <!-- Create the editor container -->
            <textarea name="information" id="editor1"  style="min-height:300px; min-width:100%">
       {{ isset($mandates->information) ? $mandates->information : '' }}
        </textarea>
        </div>
    </div>
</div>
