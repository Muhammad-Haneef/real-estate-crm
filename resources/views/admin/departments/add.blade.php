@extends('admin.layout')
@section('content')
<form method="POST" action="">
  @csrf
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col">
              <h5>Departments - add</h5>
            </div>
            <div class="col text-end">
              <a href="<?= ADMIN_URL . seg(1) ?>" class="btn btn-success btn-square btn-xs btn-air-success" title="View All" data-bs-original-title="Add New" data-original-title="View All">
                <i class="fa fa-eye"></i>
              </a>
            </div>
          </div>

        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <?= get_title_input(); ?>
            </div>
            <div class="col-md-3">
              <?= get_sort_by(); ?>
            </div>
            <div class="col-md-3">
              <?= get_active_combo(); ?>
            </div>
          </div>
        </div>
        <div class="card-footer text-end">
          <button type="submit" class="btn btn-primary">
            Submit
          </button>
        </div>
      </div>
    </div>
  </div>
</form>
@endsection


@section('js')
<script>
 
</script>
@endsection