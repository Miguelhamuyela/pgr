<div class="col-md-6">
    <div class="form-group">
        <Orgão for="organ">Orgão</label>
        <select name="organ" id="organ" class="form-control" required>
            @if (isset($direction->organ))
                <option value="{{ $direction->organ }}" class="text-primary h6" selected>
                    {{ $direction->organ }}
                </option>
            @else
                <option disabled selected>selecione a categoria</option>
            @endif

            <option value="Direcção Central">Direcção Central</option>
            <option value="Órgãos Nacionais">Órgãos Nacionais</option>
            <option value="Órgãos Regionais">Órgãos Regionais</option>
            <option value="Orgãos Provinciais">Orgãos Provinciais</option>
        </select>

    </div>

</div>

<div class="col-md-6">
    <div class="form-group">
        <Orgão for="direction">Província</label>
        <select name="province" id="province" class="form-control" >
            @if (isset($direction->province))
                <option value="{{ $direction->province }}" class="text-primary h6" selected>
                    {{ $direction->province }}
                </option>
            @else
                <option disabled selected>selecione a categoria</option>
            @endif

@include('extra.provinces.index')

        </select>

    </div>

</div>
<!-- /.col -->
<div class="col-md-4">
    <div class="form-group">
        <label for="name">Nome Completo</label>
        <input type="text" name="name" id="name" value="{{ isset($direction->name) ? $direction->name : '' }}"
            class="form-control border-secondary" placeholder="" required>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label for="office">Cargo</label>
        <input type="text" name="office" id="office" value="{{ isset($direction->office) ? $direction->office : '' }}"
            class="form-control border-secondary" placeholder="" required>
    </div>
</div> <!-- /.col -->
<div class="col-md-4">
    <div class="form-group">
        <label for="photo">Selecione o ficheiro</label>
        <input type="file" name="photo" id="photo" value="{{ isset($direction->photo) ? $direction->photo : '' }}"
            class="form-control border-secondary">
    </div>
</div> <!-- /.col -->
