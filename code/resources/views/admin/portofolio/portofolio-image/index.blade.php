@extends('admin.layouts.layouts')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Portofolio | Image</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data Image</h6>
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
                            <th>Gambar</th>
                            <th>Kategori</th>
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
@endsection


@section('modal')
<div class="modal fade" role="dialog" id="modal" data-keyboard="false" data-backdrop="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header br">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_upload" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <input type="text" id="id" name="id" hidden>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label class="d-block">Gambar</label>
                                <div class="my-3" style="display: flex">
                                    <img width="200px" height="120px" style="object-fit: contain;" id="preview_gambar" src="" alt="preview_image">
                                    <p style="margin-left: 15px; color: #6c757d; font-weight: bold">*Preview Image</p>
                                </div>
                                <span style="font-style: italic; color: rgb(131, 131, 131); display: block; margin-top: 25px"
                                    id="image-warning">*Jika gambar tidak diubah tidak perlu upload gambar</span>
                                <input type="file" onchange="previewFile(this);" name="gambar" class="form-control"
                                    id="gambar" accept="image/png, image/jpeg, image/jpg, image/webp">
                                <span class="d-flex text-danger invalid-feedback" id="invalid-gambar-feedback"></span>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label class="d-block">kategori</label>
                                <span class="d-flex text-danger invalid-feedback"
                                    id="invalid-kategori_id-feedback"></span>
                                <select id="kategori_id" name="kategori_id" class="form-control select2">
                                    <option></option>
                                    @foreach ($data as $item)
                                    <option value="{{ $item->id }}">{{ $item->kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary close" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    var url = window.location.href;

    $(document).ready(function () {
        $('#kategori_id').select2({
            width: '100%',
            placeholder: "Pilih Kategori",
            dropdownParent: $("#modal"),
        });

        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: url + '/datatables',
                type: 'GET'
            },
            columnDefs: [{
                    className: 'text-center',
                    targets: [0, 2, 3]
                },
                {
                    width: "7%",
                    targets: [0]
                },
                {
                    width: "200px",
                    targets: [1]
                },
                {
                    orderable: false,
                    targets: [1, 3]
                }
            ],
            columns: [{
                    data: 'DT_RowIndex',
                    searchable: false,
                    orderable: false
                },
                {
                    data: 'gambar',
                    render: function (data) {
                        return `<img src="{{ asset( 'code/public/storage/portofolio/${data}'); }}" width="200px" style="object-fit: contain; max-height: 120px">`
                    }
                },
                {
                    data: 'kategori.kategori'
                },
                {
                    data: 'kategori.kategori'
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

    function previewFile(input) {
        var file = $("input[type=file]").get(0).files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function () {
                $('#preview_gambar').parent().addClass("my-3");
                $('#preview_gambar').parent().css("display", "flex");
                $("#preview_gambar").attr("src", reader.result);
            }

            reader.readAsDataURL(file);
        } else {
            $("#preview_gambar").attr("src", "");
            $('#preview_gambar').parent().css("display", "none");
        }
    }

    $('.close').click(() => {
        $('#modal').modal('hide')
    })


    function add(message) {
        $("#modal").modal('show');
        $("#form_upload")[0].reset();
        $("#kategori_id").val('').trigger('change');
        $("#kategori_id").removeClass("is-invalid");
        $('.invalid-feedback').text('');
        $(".modal-title").text(message);
        $("#image-warning").css("display", "none");
        $("#preview_gambar").attr("src", "");
        $('#preview_gambar').parent().removeClass("my-3");
        $('#preview_gambar').parent().css("display", "none");
    }

    $('#form_upload').submit(function (e) {
        e.preventDefault();
        $("#modal_loading").modal('show');

        if ($('#id').val() == '') {
            $url = url + "/store";
        } else {
            $url = url + "/update";
        }

        var formData = new FormData(this);

        $.ajax({
            url: $url,
            type: "POST",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
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

    function edit(url) {
        save_method = 'edit';
        $("#modal").modal('show');
        $("#kategori_id").removeClass("is-invalid");
        $('.invalid-feedback').text('');
        $(".modal-title").text("Slider Edit");
        $("#modal_loading").modal('show');
        $.ajax({
            url: url,
            type: "GET",
            dataType: "JSON",
            success: function (response) {
                setTimeout(function () {
                    $('#modal_loading').modal('hide');
                }, 500);
                $("#form_upload")[0].reset();
                $('#preview_gambar').parent().css("display", "flex");
                $("#image-warning").css("display", "block");
                Object.keys(response).forEach(function (key) {
                    var elem_name = $('[name=' + key + ']');
                    if (key !== 'gambar') {
                        if(elem_name.hasClass('select2')){
                            elem_name.select2("trigger", "select", { data: { id: response[key] } });
                        } else{
                            elem_name.val(response[key]);
                        }
                    }
                    $("#preview_gambar").attr("src", "{{ asset( 'code/public/storage/portofolio') }}" +
                        "/" + response['gambar']);
                });
            },
            error: function (jqXHR, textStatus, errorThrown) {
                setTimeout(function () {
                    $('#modal_loading').modal('hide');
                }, 500);
                swal("Oops! Terjadi kesalahan segera hubungi tim IT (" + errorThrown + ")", {
                    icon: 'error',
                });
            }
        });
    }

    function delete_action(url) {
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
                        url: url,
                        type: "DELETE",
                        dataType: "JSON",
                        success: function (response) {
                            setTimeout(function () {
                                $('#modal_loading').modal('hide');
                            }, 500);
                            if (response.status === 200) {
                                swal(response.message, {
                                    icon: 'success',
                                });
                                $("#modal").modal('hide');
                                $('#dataTable').DataTable().ajax.reload();
                            } else {
                                swal(response.message, {
                                    icon: 'error',
                                });
                            }

                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            setTimeout(function () {
                                $('#modal_loading').modal('hide');
                            }, 500);
                            swal("Oops! Terjadi kesalahan segera hubungi tim IT (" + errorThrown +
                            ")", {
                                icon: 'error',
                            });
                        }
                    });
                }
            });
    }

</script>
@endsection
