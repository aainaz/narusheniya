<x-header />

<div class="d-flex container">
    <form action="/app_create" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Введите номер машины</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="auto_number">
      </div>
      @error('auto_number')
            <div class="alert alert-danger" role="alert">{{ $message }}</div>
        @enderror
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Описание Нарушения</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="description">
    </div>
    @error('description')
    <div class="alert alert-danger" role="alert">{{ $message }}</div>
@enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
