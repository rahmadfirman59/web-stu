

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Portofolio | Kategori</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
            <div class="card-header-action">
                <button type="button" style="margin-right: 10px" class="btn btn-warning"
                    onclick="add('Tambah Data');"><i class="fa fa-plus mr-1"></i>
                    Tambah Data</button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="table-primary text-light">
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Kategori-Slug</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('modal'); ?>
<div class="modal fade" role="dialog" id="modal" data-keyboard="false" data-backdrop="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header br">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_upload" method="POST" autocomplete="off">
                <input type="text" id="id" name="id" hidden>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label>Kategori</label>
                                <input type="text" name="kategori" id="kategori" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label>Kategori Slug</label>
                                <input type="text" name="kategori_slug" id="kategori_slug" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
    var url = window.location.href;

    $(document).ready(function () {
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: url + '/datatables',
                type: 'GET'
            },
            columnDefs: [{
                    className: 'text-center',
                    targets: [0, 3]
                },
                {
                    width: "7%",
                    targets: [0]
                },
                {
                    orderable: false,
                    targets: [3]
                }
            ],
            columns: [{
                    data: 'DT_RowIndex',
                    searchable: false,
                    orderable: false
                },
                {
                    data: 'kategori'
                },
                {
                    data: 'kategori_slug'
                },
                {
                    data: 'kategori'
                },
            ],
            rowCallback: function (row, data) {
                var url_edit = url + "/detail/" + data.id;
                var url_delete = url + "/delete/" + data.id;
                $('td:eq(3)', row).html(`
                <button class="btn btn-info btn-sm mr-1" onclick="edit('${url_edit}')"><i class="fa fa-edit"></i></button>
                <button class="btn btn-danger btn-sm" onclick="delete_action('${url_delete}')"><i class="fa fa-trash"></i></button>
            `);
            },
            order: [
                [0, 'asc']
            ]
        });
    });

    $('.close').click(() => {
        $('#modal').modal('hide')
    });

    $('#kategori').on("change", function(){
        fetch( url + '/createSlug?kategori=' + $('#kategori').val())
            .then(response => response.json())
            .then(data =>  $('#kategori_slug').val(data.kategori_slug))
    });

    function add(message) {
        $("#modal").modal('show');
        $("#form_upload")[0].reset();
        $(".modal-title").text(message);
    }

    $('#form_upload').submit(function (e) {
        e.preventDefault();
        
        $("#modal_loading").modal('show');

        if ($('#id').val() == '') {
            $url = url + "/store";
        } else {
            $url = url + "/update";
        }

        $.ajax({
            url: $url,
            type: "POST",
            data: $('#form_upload').serialize(),
            datatype: 'JSON',
            success: function (response) {
                setTimeout(function () {
                    $('#modal_loading').modal('hide');
                }, 500);
                if (response.status === 200) {
                    swal(response.message, {
                        icon: 'success',
                    });
                    $('#modal').modal('hide');
                    $('#dataTable').DataTable().ajax.reload();
                } else {
                    console.log(response)
                    Object.keys(response.message).forEach(function (key) {
                        var elem_name = $('[name=' + key + ']');
                        var elem_feedback = $('[id=invalid-' + key + '-feedback' + ']');
                        elem_name.addClass('is-invalid');
                        elem_feedback.text(response.message[key]);
                    });
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                setTimeout(function () {
                    $('#modal_loading').modal('hide');
                }, 500);
                swal("Oops! Terjadi kesalahan (" + errorThrown + ")", {
                    icon: 'error',
                });
            }
        })
    });

    function edit(url){
        save_method = 'edit';
        $("#modal").modal('show');
        $(".modal-title").text("Slider Edit");
        $("#modal_loading").modal('show');
        $.ajax({
            url : url,
            type: "GET",
            dataType: "JSON",
            success: function(response){
                setTimeout(function () {  $('#modal_loading').modal('hide'); }, 500);
                $("#form_upload")[0].reset();
                $('#preview_gambar').parent().css("display", "flex");
                $("#image-warning").css("display", "block");
                Object.keys(response).forEach(function (key) {
                    if(key !== 'gambar'){
                        var elem_name = $('[name=' + key + ']');
                        elem_name.val(response[key]);
                    }
                    $("#preview_gambar").attr("src", "<?php echo e(asset( 'code/public/storage/slider')); ?>" + "/" + response['gambar']);
                });
            },error: function (jqXHR, textStatus, errorThrown){
                setTimeout(function () {  $('#modal_loading').modal('hide'); }, 500);
                swal("Oops! Terjadi kesalahan segera hubungi tim IT (" + errorThrown + ")", {  icon: 'error', });
            }
        });
    }

    function delete_action(url){
        swal({
            title: 'Apakah anda yakin?',
            text: 'Apakah anda yakin akan menghapus data ini ?',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
            $("#modal_loading").modal('show');
            $.ajax({
                url : url,
                type: "DELETE",
                dataType: "JSON",
                success: function(response){
                    setTimeout(function () {  $('#modal_loading').modal('hide'); }, 500);
                    if(response.status === 200){
                        swal(response.message, {  icon: 'success', });
                    $("#modal").modal('hide');
                    $('#dataTable').DataTable().ajax.reload();
                    }else{
                    swal(response.message, {  icon: 'error', });
                    }

                },error: function (jqXHR, textStatus, errorThrown){
                    setTimeout(function () {  $('#modal_loading').modal('hide'); }, 500);
                    swal("Oops! Terjadi kesalahan segera hubungi tim IT (" + errorThrown + ")", {  icon: 'error', });
                }
            });
        }
      });
    }

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web-stu\code\resources\views/admin/portofolio/kategori/index.blade.php ENDPATH**/ ?>