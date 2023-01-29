@extends('admin.layout')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col">
            <h5>Departments</h5>
          </div>
          <div class="col text-end">
            <a href="<?= ADMIN_URL.seg(1).'/add' ?>" class="btn btn-success btn-square btn-xs btn-air-success" title="add new" data-bs-original-title="Add New" data-original-title="Add New">
              <i class="fa fa-plus"></i>
            </a>
          </div>
        </div>

      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="display" id="basic-1">
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th class="text-center">Sort By</th>
                <th class="text-center">Active</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if ($records) {
                $c = 1;
                foreach ($records as $row) {
              ?>
                  <tr>
                    <td class="text-center" width="30"><?= $c; ?></td>
                    <td><?= $row->title; ?></td>
                    <td class="text-center" width="80"><?= $row->sort_by; ?></td>
                    <td class="text-center" width="30">
                      <input class="checkbox_animated" id="chk-ani" type="checkbox" <?php if ($row->active) echo "checked" ?> />
                    </td>
                    <td class="text-center" width="30">
                      <a data-toggle="tooltip" data-placement="top" class="btn btn-success btn-square btn-xs btn-air-success" title="Edit" href="<?= ADMIN_URL.seg(1).'/edit/'.$row->id ?>">
                        <span class="fa fa-edit"></span>
                      </a>
                      <a data-toggle="tooltip" data-placement="top" class="btn btn-danger btn-square btn-xs btn-air-danger" title="Delete" href="">
                        <span class="fa fa-trash-o"></span>
                      </a>
                    </td>
                  </tr>
              <?php $c++;
                }
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection