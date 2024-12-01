@include('template.head');
@include('template.header');
@include('template.page_loader');
@include('template.navigation');

<style>
    table td,
    table th {
        vertical-align: middle !important;
    }

    .ui-datepicker {
        z-index: 99999 !important;
    }

    .mfp-wrap {
        z-index: 99999 !important;
    }

    .row-del-form {
        position: relative;
        padding-left: 100px;
    }

    .row-del-form .btn-danger {
        position: absolute;
        bottom: 16px;
        left: 15px;
        padding: 9px 20px;
    }

    .box-print-inputkala {
        border: 1px solid #000;
    }

    .box-print-inputkala .head-print {
        padding: 10px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid #000;
    }

    .box-print-inputkala .head-print .large-logo {
        width: 200px;
    }

    .box-print-inputkala .head-print .card-title {
        width: 100%;
        text-align: center;
        margin: 0;
    }

    .box-print-inputkala .head-print .card-title h2,
    .box-print-inputkala .head-print .card-title h5 {
        margin: 0;
        line-height: 1.4;
    }

    .box-print-inputkala .head-print .head-date-number {
        flex-shrink: 0;
        width: 200px;
    }

    .box-print-inputkala .row-print-inputkala .col-rw-print {
        border-left: 1px solid #000;
        border-bottom: 1px solid #000;
        line-height: 2;
    }

    .box-print-inputkala .row-print-inputkala:last-child .col-rw-print {
        border-bottom: none;
    }

    .box-print-inputkala .row-print-inputkala .col-rw-print:last-child {
        border-left: none;
    }

    .box-print-inputkala .row-print-inputkala .lbl-title-print {
        font-size: 12px;
    }

    .box-print-inputkala .table-bordered td,
    .box-print-inputkala .table-bordered th {
        border: 1px solid #000;
        padding: 2px;
        font-size: 12px;
    }

    .box-print-inputkala .table-bordered thead tr:first-child th {
        border-top: none;
    }

    .box-print-inputkala .table-bordered th:first-child {
        border-right: none;
    }

    .box-print-inputkala .table-bordered td:last-child,
    .box-print-inputkala .table-bordered th:last-child {
        border-left: none;
    }

    .js-example-basic-single.fixed-width+.select2 {
        width: 200px !important;
        text-align: right !important;
    }

    @media print {

        .hidden-print,
        .modal-backdrop {
            display: none !important;
        }

        body {
            background: #fff;
        }

        .table-bordered td,
        .table-bordered th,
        .table thead th {
            border-width: 2px !important;
            border-color: #000 !important;
        }

        .modal {
            height: auto !important;
        }

        .modal-dialog {
            max-width: 100% !important;
            margin: 0 !important;
        }

        .modal-content {
            border: none !important;
            border-radius: 0 !important;
        }

        .box-print-inputkala .row-print-inputkala .col-rw-print {
            border-left: 1.5px solid #000;
            border-bottom: 1.5px solid #000;
        }

        .box-print-inputkala {
            border: 1.5px solid #000;
        }

        .box-print-inputkala .head-print {
            border-bottom: 1.5px solid #000;
        }

        .box-print-inputkala .table-bordered thead tr:first-child th {
            border-top: none;
        }

        .box-print-inputkala .table-bordered th:first-child {
            border-right: none;
        }

        .box-print-inputkala .table-bordered td:last-child,
        .box-print-inputkala .table-bordered th:last-child {
            border-left: none;
        }
    }


    .dd-list .dd-list {
        padding-right: 30px;
    }

    .dd-list .dd-list {
        padding-left: 0px;
    }

    .avatar-upload {
        position: relative;
        width: 100%;
        margin: 20px 0 30px;

        .avatar-edit {
            position: absolute;
            right: 20px;
            z-index: 1;
            top: 20px;

            input {
                display: none;

                +label {
                    display: inline-block;
                    width: 34px;
                    height: 34px;
                    margin-bottom: 0;
                    border-radius: 100%;
                    background: #FFFFFF;
                    border: 1px solid transparent;
                    box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
                    cursor: pointer;
                    font-weight: normal;
                    transition: all .2s ease-in-out;

                    &:hover {
                        background: #f1f1f1;
                        border-color: #d6d6d6;
                    }

                    &:after {
                        content: "\f040";
                        font-family: 'FontAwesome';
                        color: #757575;
                        position: absolute;
                        top: 7px;
                        left: 0;
                        right: 0;
                        text-align: center;
                        margin: auto;
                    }
                }
            }
        }

        .avatar-preview {
            width: 100%;
            height: 300px;
            position: relative;
            border-radius: 20px;
            border: 6px solid #F8F8F8;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);

            >img,
            video {
                width: 100%;
                height: 100%;
                object-fit: cover;
                border-radius: 15px;

            }
        }
    }

    .btn-del-file {
        cursor: pointer;
        position: absolute;
        top: 20px;
        right: 60px;
        z-index: 10;
        width: 34px;
        height: 35px;
        border-radius: 100px;
        background-color: #e04b4b;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
        font-size: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        border: none;
        display: none;
    }

    .file-loading::before {
        display: none;
    }

    .message-item {
        background: #ebebeb;
        margin-bottom: 35px;
        display: inline-block;
        padding: 5px 15px;
        -webkit-border-radius: 20px;
        -moz-border-radius: 20px;
        border-radius: 20px;
        width: 100%;
        position: relative;
        line-height: 2;
    }

    .message-item:last-child {
        margin-bottom: 0;
    }

    .message-item .message-item-date {
        position: absolute;
        bottom: -25px;
        right: 10px;
    }

    .message-item.message-item-error:before {
        font: normal normal normal 14px/1 FontAwesome;
        content: "\f06a";
        display: block;
        width: 20px;
        height: 20px;
        position: absolute;
        color: #ff3232;
        font-size: 16px;
        top: -7px;
        right: 5px;
    }

    .message-item.outgoing-message {
        background: #5867dd;
        color: white;
        margin-right: auto;
    }

    .message-item.outgoing-message .message-item-date {
        right: auto;
        left: 10px;
    }

    .message-item.outgoing-message.message-item-error:before {
        left: 0;
        right: auto;
    }

    .message-item.message-item-media {
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        background: none;
        padding: 0;
        color: #646464;
    }

    .message-item.message-item-media .media-file {
        padding: 5px;
    }

    .message-item.message-item-media .media-file .media-error {
        position: relative;
    }

    .message-item.message-item-media .media-file .media-error:before {
        font: normal normal normal 14px/1 FontAwesome;
        content: "\f06a";
        display: block;
        width: 20px;
        height: 20px;
        position: absolute;
        color: #ff3232;
        top: -7px;
        left: -5px;
        z-index: 2;
    }

    .message-item.message-item-media ul {
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-flow: wrap;
        -ms-flex-flow: wrap;
        flex-flow: wrap;
    }

    .message-item.message-item-media ul a {
        display: block;
        position: relative;
        border: 1px solid #eee;
        border-radius: 20px;
        overflow: hidden;
    }

    .message-item.message-item-media ul a.media-error:before {
        font: normal normal normal 14px/1 FontAwesome;
        content: "\f06a";
        display: block;
        width: 20px;
        height: 20px;
        position: absolute;
        color: #ff3232;
        top: 5px;
        left: 5px;
    }

    .message-item.message-item-media ul a span,
    .message-item.message-item-media ul a input {
        white-space: nowrap;
        overflow: hidden;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
        position: absolute;
        bottom: 0;
        right: 0;
        left: 0;
        background: -webkit-gradient(linear, right top, right bottom, from(transparent), to(rgba(0, 0, 0, 0.65)));
        background: -webkit-linear-gradient(transparent, rgba(0, 0, 0, 0.65));
        background: -moz- oldlinear-gradient(transparent, rgba(0, 0, 0, 0.65));
        background: -o-linear-gradient(transparent, rgba(0, 0, 0, 0.65));
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.65));
        color: white;
        padding: 10px;
        font-size: 13px;
        text-align: center;
    }

    .message-item.message-item-media ul a input {
        opacity: 0;
        pointer-events: none;
    }

    .message-item.message-item-media ul li {
        position: relative;
    }

    .message-item.message-item-media ul a img {
        max-width: 100%;
        width: 138px;
        height: 138px;
        object-fit: contain;
    }

    .message-item.message-item-media ul a:hover {
        cursor: -webkit-zoom-in;
        cursor: -moz-zoom-in;
        cursor: zoom-in;
    }

    .message-item.message-item-media ul a:hover span {
        background: -webkit-gradient(linear, right top, right bottom, from(transparent), to(rgba(0, 0, 0, 0.75)));
        background: -webkit-linear-gradient(transparent, rgba(0, 0, 0, 0.75));
        background: -moz- oldlinear-gradient(transparent, rgba(0, 0, 0, 0.75));
        background: -o-linear-gradient(transparent, rgba(0, 0, 0, 0.75));
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.75));
    }

    .message-item.message-item-media .btn-copy-clipboard {
        position: absolute;
        right: 10px;
        z-index: 1;
        top: 10px;
        display: inline-block;
        width: 34px;
        height: 34px;
        margin-bottom: 0;
        border-radius: 100%;
        background: rgba(255, 255, 255, 0.5);
        border: 1px solid transparent;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
        cursor: pointer;
        font-weight: normal;
        transition: all .2s ease-in-out;
    }

    .message-item.message-item-media .btn-copy-clipboard::before {
        content: "\f0c5";
        font-family: 'FontAwesome';
        color: #757575;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        text-align: center;
        margin: auto;
        font-size: 16px;
    }

    .message-item.message-item-media .btn-copy-clipboard:hover {
        background-color: #5867dd;
    }

    .message-item.message-item-media .btn-copy-clipboard:hover::before {
        color: #fff;
    }

    .message-item.message-item-media .btn-del-gallery {
        position: absolute;
        right: 50px;
        z-index: 1;
        top: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 34px;
        height: 34px;
        margin-bottom: 0;
        border-radius: 100%;
        background: rgba(255, 255, 255, 0.5);
        border: none;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
        cursor: pointer;
        font-weight: normal;
        font-size: 16px;
        color: #757575;
        transition: all .2s ease-in-out;
    }

    .message-item.message-item-media .btn-del-gallery:hover {
        background-color: #e04b4b;
        color: #fff;
    }
</style>


<!-- begin::main content -->
<main class="main-content hidden-print">

    <div class="row">
        <div class="col-xl-12 col-md-12 p-0">

            <div class="card">
                <div class="card-body">

                    <div class="rounded mt-4 px-4 pt-4 pb-2" style="background-color: #e7ebee;">

                        <div class="card-title d-flex justify-content-center align-items-center text-center flex-wrap">
                            <h3 class="w-100 mb-0">فرم درخت واره</h3>
                            <h5 class="w-100 font-weight-normal" style="line-height: 0.8;"></h5>
                        </div>

                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <button type="button" class="btn btn-success mr-2" data-toggle="modal"
                                data-target="#add_content_modal_Main">افزودن گروه اصلی</button>
                            <div id="nestable-menu">
                                <button type="button" class="btn btn-primary mr-2" data-action="expand-all">باز کردن
                                    همه</button>
                                <button type="button" class="btn btn-primary" data-action="collapse-all">جمع کردن
                                    همه</button>
                            </div>
                        </div>

                        <p class="text-muted">لیست تو در تو <i class="fa fa-angle-left mx-2"></i> <span
                                style="font-size:1px; font-weight:bold; color:#2c3191;"></span></p>

                        <div class="dd" id="nestable1">
                            <ol class="dd-list">
                                <!-- محتواها اینجا اضافه می‌شوند -->
                            </ol>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

</main>

<!-- افزودن زیر گروه -->
<div class="modal fade add_content_modal_Sub" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">افزودن زیر گروه </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="بستن">
                        <i class="ti-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>عنوان مطالب</label>
                        <input type="text" class="form-control text-left" name="stext">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                    <button type="submit" class="btn btn-success">ثبت گروه اصلی</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- لیست مطالب -->
<div class="modal fade list_content_modal" tabindex="-1" role="dialog" aria-hidden="true">


    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">

            <form action="" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">لیست مطالب</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="بستن">
                        <i class="ti-close"></i>
                    </button>
                </div>
                <div class="modal-body">

                </div>
            </form>



        </div>
    </div>

</div>







<!-- ویرایش زیر گروه -->
<div class="modal edit_content_sub_modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">

        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">ویرایش زیر گروه </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="بستن">
                    <i class="ti-close"></i>
                </button>
            </div>

            <div class="modal-body" id='MenuDetails'>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                <!-- <button type="submit" class="btn btn-primary">ویرایش اطلاعات</button> -->
            </div>

        </div>


    </div>
</div>


<!-- پنجره‌ای پنهان = modal fade-->
<div class="modal fade" id="add_content_modal_Main" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            {{-- <form action="Menu/Menu-Insert.php?c=<?php echo $c; ?>&&root=<?php echo $root; ?>" method="post">

                <!-- هدر Modal -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">افزودن گروه اصلی</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="بستن">
                        <i class="ti-close"></i>
                    </button>
                </div>
                <!-- body Modal -->
                <div class="modal-body">
                    <div class="form-group">
                        <label>عنوان مطالب</label>
                        <input type="text" class="form-control text-left" name="stext">
                    </div>
                </div>

                <!-- footer Modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                    <button type="submit" class="btn btn-success">ثبت گروه اصلی</button>
                </div>
            </form> --}}
        </div>
    </div>
</div>




<!-- افزودن مطلب جدید -->
<div class="modal fade add_content_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <form action="">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">افزودن مطلب جدید</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="بستن">
                        <i class="ti-close"></i>
                    </button>
                </div>
                <div class="modal-body" id='MenuContentDetails'>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                    <!-- <button type="submit" class="btn btn-success">ثبت مطلب</button> -->
                </div>
            </form>
        </div>
    </div>
</div>


<!-- ویرایش مطلب -->
<div class="modal fade edit_content_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <form action="">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">ویرایش مطلب</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="بستن">
                        <i class="ti-close"></i>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                    <!-- <button type="submit" class="btn btn-success">ثبت مطلب</button> -->
                </div>
            </form>
        </div>
    </div>
</div>




<!-- آپلود فایل -->
<div class="modal modal_upload_files fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">آپلود فایل</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="بستن">
                    <i class="ti-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="file-loading">
                    <form enctype="multipart/form-data" action="upload.php" method="post">
                        <input id="file_upload_fa" name="file_upload_fa[]" type="file" multiple>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>








<!-- لیست فایل های آپلود شده -->
<div class="modal modal_list_files fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">لیست فایل های آپلود شده</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="بستن">
                    <i class="ti-close"></i>
                </button>
            </div>
            <div class="modal-body" id='mylistfile'>



            </div>
        </div>
    </div>
</div>



@include('template.footer(scripts)');
<script>
    $(document).ready(function() {

        // Variable to pass
        const myVariable = {
            MainId: ''
        };

        var uploadurlform = "";
        var uploadlistid = "";

        var MenuDetailsId = "";
        var MenuDetailsRoot = "";

        var MenuContentId = "";
        var MenuContentRoot = "";
        var DetailsContentid = "";


        var listcontentid = "";
        $('a[data-toggle="modal"]').on('click', function() {


            var modalid = $(this).data('target');
            var formurl = $(this).data('formurl');
            var menuid = $(this).data('menuid');
            var menuroot = $(this).data('menuroot');
            var detailsid = $(this).data('detailsid');
            //alert(detailsid);


            uploadlistid = formurl;
            myVariable.MainId = uploadlistid;

            MenuDetailsId = menuid;
            MenuDetailsRoot = menuroot;

            MenuContentId = menuid;
            MenuContentRoot = menuroot;
            DetailsContentid = detailsid;

            uploadurlform = formurl;
            listcontentid = formurl;
            $(modalid).on('show.bs.modal', function(event) {
                $(modalid).find('form').attr('action', formurl);
            })
        });


        $("#file_upload_fa").fileinput({
            language: 'fa',
            browseLabel: 'آپلود فایل',
            previewFileIcon: '<i class="fa fa-file text-primary"></i>',
            previewFileIconSettings: {
                'doc': '<i class="fas fa-file-word text-primary"></i>',
                'doc': '<i class="fas fa-file-word text-primary"></i>',
                'xls': '<i class="fas fa-file-excel text-success"></i>',
                'ppt': '<i class="fas fa-file-powerpoint text-danger"></i>',
                'jpg': '<i class="fas fa-file-image text-warning"></i>',
                'pdf': '<i class="fas fa-file-pdf text-danger"></i>',
                'zip': '<i class="fas fa-file-archive text-muted"></i>',
                'htm': '<i class="fas fa-file-code text-info"></i>',
                'html': '<i class="fas fa-file-code text-info"></i>',
                'css': '<i class="fas fa-file-code text-info"></i>',
                'js': '<i class="fas fa-file-code text-info"></i>',
                'txt': '<i class="fas fa-file-alt text-info"></i>',
                'mov': '<i class="fas fa-file-video text-warning"></i>',
                'mp3': '<i class="fas fa-file-audio text-warning"></i>',
            },
            //uploadUrl: "/file-upload-batch/",

            uploadUrl: "up.php",
            uploadExtraData: function() {
                return myVariable; // Pass the variable here
            },

        }).on('fileuploaded', function(event, data, previewId, index) {
            if (data.response) {
                // Handle success response
                console.log("File uploaded successfully:", data.response);
                $('.modal_upload_files').modal('hide');
                $('.modal_list_files').modal('show');
            }
        }).on('fileuploaderror', function(event, data, msg) {
            // Handle error response
            console.error("File upload error:", msg);
        });


        $('.modal_list_files').on('shown.bs.modal', function(event) {

            $('.modal_list_files .modal-body').html('loading ...');
            $.ajax({
                type: 'POST',
                url: 'List-Files.php',
                data: "steep1=" + uploadlistid,

                success: function(data) {
                    $('.modal_list_files .modal-body').html(data);

                    var magnificPopupGalleryConfig = {
                        type: 'image',
                        gallery: {
                            enabled: true
                        },
                        zoom: {
                            enabled: true,
                            duration: 300,
                            easing: 'ease-in-out',
                            opener: function(openerElement) {
                                return openerElement.is('img') ? openerElement :
                                    openerElement.find('img');
                            }
                        }
                    };

                    $('.image-popup-gallery-item').magnificPopup(
                    magnificPopupGalleryConfig);

                    SwalDelete("پس از حذف این عکس قادر به بازیابی نخواهید بود!");
                }
            });
        });

        function SwalDelete(textswal) {
            var formurldelete = "";
            $('a.sweet-del-content').on('click', function() {
                formurldelete = $(this).data('formurl');
                //alert(formurldelete);
            });

            $('.sweet-del-content').on('click', function() {

                swal({
                        title: "آیا اطمینان دارید؟",
                        text: textswal,
                        icon: "warning",
                        buttons: {
                            confirm: 'بله',
                            cancel: 'خیر'
                        },
                        dangerMode: true
                    })
                    .then(function(willDelete) {
                        if (willDelete) {
                            swal("حذف مطلب با موفقیت انجام شد.", {
                                icon: "success",
                                button: "باشه"
                            }).then(function() {
                                // alert(formurldelete);
                                window.location.href = formurldelete;
                            });
                        } else {
                            swal("حذف مطلب صورت نگرفت", {
                                icon: "error",
                                button: "باشه"
                            });
                        }
                    });
            });
        }
        SwalDelete("پس از حذف این مطلب قادر به بازیابی نخواهید بود");



        $('.list_content_modal').on('shown.bs.modal', function(event) {

            $('.list_content_modal .modal-body').html('loading ...');


            $.ajax({
                type: 'POST',
                url: 'List.php',
                data: "MenuContentId=" + MenuContentId + "&&MenuContentRoot=" +
                    MenuContentRoot + "&&DetailsContentid=" + DetailsContentid,

                success: function(data) {
                    $('.list_content_modal .modal-body').html(data);

                    $('a[data-toggle="modal"]').on('click', function() {
                        var menuid = $(this).data('menuid');
                        var menuroot = $(this).data('menuroot');
                        var detailsid = $(this).data('detailsid');
                        MenuContentId = menuid;
                        MenuContentRoot = menuroot;
                        DetailsContentid = detailsid;
                    });


                    SwalDelete("پس از حذف این مطلب قادر به بازیابی نخواهید بود");


                }
            });
        });









        $('.edit_content_sub_modal').on('shown.bs.modal', function(event) {

            $('.edit_content_sub_modal .modal-body').html('loading ...');
            $.ajax({
                type: 'POST',
                url: 'Menu/MenuDetails.php',
                data: "MenuDetailsId=" + MenuDetailsId + "&&MenuDetailsRoot=" + MenuDetailsRoot,

                success: function(data) {
                    $('.edit_content_sub_modal .modal-body').html(data);
                    //initSample();



                    //...........

                    $('#imageUpload3').on('change', function() {
                        // var preview = $('#avaterupload2 img');
                        var file = document.querySelector('input[id=imageUpload3]')
                            .files[0];
                        var reader = new FileReader();

                        reader.addEventListener("load", function() {
                            $('#imagePreview3').attr('src', reader.result);
                        }, false);

                        $(this).parents('.avatar-upload').find('.btn-del-file').css(
                            'display', 'flex');

                        if (file) {
                            reader.readAsDataURL(file);
                        }
                    });






                    $('#imageUpload4').on('change', function() {
                        var file = document.querySelector('input[id=imageUpload4]')
                            .files[0];
                        var reader = new FileReader();

                        reader.addEventListener("load", function() {
                            $('#imagePreview4').removeAttr('poster');
                            $('#imagePreview4').attr('src', reader.result);
                            $('#imagePreview4').attr('controls', '');
                        }, false);

                        $(this).parents('.avatar-upload').find('.btn-del-file').css(
                            'display', 'flex');

                        if (file) {
                            reader.readAsDataURL(file);
                        }
                    });






                    $('.btn-del-imagefile').on('click', function() {
                        $(this).parents('.avatar-upload').find(
                            '.avatar-preview img').attr('src',
                            './assets/media/image/no-image.jpg');
                        $(this).css('display', 'none');
                    });





                    $('.btn-del-videofile').on('click', function() {
                        $(this).parents('.avatar-upload').find(
                            '.avatar-preview video').attr('poster',
                            './assets/media/image/no-video.jpg');
                        $(this).parents('.avatar-upload').find(
                            '.avatar-preview video').attr('src', '');
                        $(this).parents('.avatar-upload').find(
                            '.avatar-preview video').removeAttr('controls');
                        $(this).css('display', 'none');
                    });






                    $('input.date-picker-shamsi-list').datepicker({
                        dateFormat: "yy/mm/dd",
                        showOtherMonths: true,
                        selectOtherMonths: true,
                        changeMonth: true,
                        changeYear: true,
                        showButtonPanel: true,
                    });



                    $('.clockpicker-autoclose-demo').clockpicker({
                        autoclose: true,
                        align: 'right'
                    });


                    $("input.tagsinput").tagsinput('items');


                    CKEDITOR.replace('ckeditor');

                    initSample();

                }
            });
        });


        $(document).on('blur', '.get-svg-code', function() {
            var svghtml = $(this).val();
            $(this).parents('.form-group').find('.svg-view-html').html(svghtml);
        });

        $('.add_content_modal').on('shown.bs.modal', function(event) {

            $('.add_content_modal .modal-body').html('loading ...');
            $.ajax({
                type: 'POST',
                url: 'Menu/MenuContent-Details.php',
                data: "MenuContentId=" + MenuContentId + "&&MenuContentRoot=" + MenuContentRoot,

                success: function(data) {
                    $('.add_content_modal .modal-body').html(data);



                    //...........

                    $('#imageUpload1').on('change', function() {
                        var file = document.querySelector('input[id=imageUpload1]')
                            .files[0];
                        var reader = new FileReader();

                        reader.addEventListener("load", function() {
                            $('#imagePreview1').attr('src', reader.result);
                        }, false);

                        $(this).parents('.avatar-upload').find('.btn-del-file').css(
                            'display', 'flex');

                        if (file) {
                            reader.readAsDataURL(file);
                        }
                    });

                    $('#imageUpload2').on('change', function() {
                        var file = document.querySelector('input[id=imageUpload2]')
                            .files[0];
                        var reader = new FileReader();

                        reader.addEventListener("load", function() {
                            $('#imagePreview2').removeAttr('poster');
                            $('#imagePreview2').attr('src', reader.result);
                            $('#imagePreview2').attr('controls', '');
                        }, false);

                        $(this).parents('.avatar-upload').find('.btn-del-file').css(
                            'display', 'flex');

                        if (file) {
                            reader.readAsDataURL(file);
                        }
                    });






                    $('.btn-del-imagefile').on('click', function() {
                        $(this).parents('.avatar-upload').find(
                            '.avatar-preview img').attr('src',
                            './assets/media/image/no-image.jpg');
                        $(this).css('display', 'none');
                    });





                    $('.btn-del-videofile').on('click', function() {
                        $(this).parents('.avatar-upload').find(
                            '.avatar-preview video').attr('poster',
                            './assets/media/image/no-video.jpg');
                        $(this).parents('.avatar-upload').find(
                            '.avatar-preview video').attr('src', '');
                        $(this).parents('.avatar-upload').find(
                            '.avatar-preview video').removeAttr('controls');
                        $(this).css('display', 'none');
                    });






                    $('input.date-picker-shamsi-list').datepicker({
                        dateFormat: "yy/mm/dd",
                        showOtherMonths: true,
                        selectOtherMonths: true,
                        changeMonth: true,
                        changeYear: true,
                        showButtonPanel: true,
                    });



                    $('.clockpicker-autoclose-demo').clockpicker({
                        autoclose: true,
                        align: 'right'
                    });


                    $("input.tagsinput").tagsinput('items');

                    CKEDITOR.replace('ckeditor');

                    initSample();

                }
            });
        });



        $('.edit_content_modal').on('shown.bs.modal', function(event) {

            $('.edit_content_modal .modal-body').html('loading ...');


            $.ajax({
                type: 'POST',
                url: 'Menu/MenuContentEdit-Details.php',
                data: "MenuContentId=" + MenuContentId + "&&MenuContentRoot=" +
                    MenuContentRoot + "&&DetailsContentid=" + DetailsContentid,

                success: function(data) {
                    $('.edit_content_modal .modal-body').html(data);
                    //initSample();

                    //...........

                    $('#imageUpload5').on('change', function() {
                        // var preview = $('#avaterupload2 img');
                        var file = document.querySelector('input[id=imageUpload5]')
                            .files[0];
                        var reader = new FileReader();

                        reader.addEventListener("load", function() {
                            $('#imagePreview5').attr('src', reader.result);
                        }, false);

                        $(this).parents('.avatar-upload').find('.btn-del-file').css(
                            'display', 'flex');

                        if (file) {
                            reader.readAsDataURL(file);
                        }
                    });

                    $('#imageUpload6').on('change', function() {
                        // var preview = $('#avaterupload2 img');
                        var file = document.querySelector('input[id=imageUpload6]')
                            .files[0];
                        var reader = new FileReader();

                        reader.addEventListener("load", function() {
                            $('#imagePreview6').removeAttr('poster');
                            $('#imagePreview6').attr('src', reader.result);
                            $('#imagePreview6').attr('controls', '');
                        }, false);

                        $(this).parents('.avatar-upload').find('.btn-del-file').css(
                            'display', 'flex');

                        if (file) {
                            reader.readAsDataURL(file);
                        }
                    });






                    $('.btn-del-imagefile').on('click', function() {
                        $(this).parents('.avatar-upload').find(
                            '.avatar-preview img').attr('src',
                            './assets/media/image/no-image.jpg');
                        $(this).css('display', 'none');
                    });





                    $('.btn-del-videofile').on('click', function() {
                        $(this).parents('.avatar-upload').find(
                            '.avatar-preview video').attr('poster',
                            './assets/media/image/no-video.jpg');
                        $(this).parents('.avatar-upload').find(
                            '.avatar-preview video').attr('src', '');
                        $(this).parents('.avatar-upload').find(
                            '.avatar-preview video').removeAttr('controls');
                        $(this).css('display', 'none');
                    });






                    $('input.date-picker-shamsi-list').datepicker({
                        dateFormat: "yy/mm/dd",
                        showOtherMonths: true,
                        selectOtherMonths: true,
                        changeMonth: true,
                        changeYear: true,
                        showButtonPanel: true,
                    });



                    $('.clockpicker-autoclose-demo').clockpicker({
                        autoclose: true,
                        align: 'right'
                    });


                    $("input.tagsinput").tagsinput('items');

                    CKEDITOR.replace('ckeditor');

                    initSample();

                }
            });
        });







        var count = 1;
        $('#btn_add_inputkala').click(function() {
            count++;
            $('#row_table_inputkala').append(
                '<tr class="text-center tr-table-inputkala"><th scope="row">' + count +
                '</th><td style="width:200px"><select class="js-example-basic-single fixed-width text-right"><option>انتخاب</option><option>موز سبز سن ساتین</option><option>موز سبز تریوکا</option><option>پالت چوبی موز</option><option>نبش پلاستیکی</option></select></td><td style="width:150px"><select class="js-example-basic-single"><option>انتخاب</option><option>سالن 1</option><option>سالن 2</option><option>سالن 3</option></select></td><td style="width:200px"><select class="js-example-basic-single fixed-width text-right"><option>انتخاب</option><option>سن ساتین</option><option>تریوکا</option></select></td><td><select class="js-example-basic-single"><option>انتخاب</option><option>بزرگ</option><option>کوچک</option></select></td><td><input type="text" class="form-control text-center"></td><td><button type="button" class="btn btn-danger btn-del-inputkala" style="font-size:18px;padding:8px 10px"><i class="fa fa-trash"></i></button></td></tr>'
                );

            $('.js-example-basic-single').select2({
                placeholder: 'انتخاب'
            });

            $('#row_table_inputkala').on('click', '.btn-del-inputkala', function() {
                $(this).parents('.tr-table-inputkala').remove();
            });

        });

        $('#imageUpload1').on('change', function() {
            var file = document.querySelector('input[id=imageUpload1]').files[0];
            var reader = new FileReader();

            reader.addEventListener("load", function() {
                $('#imagePreview1').attr('src', reader.result);
            }, false);

            $(this).parents('.avatar-upload').find('.btn-del-file').css('display', 'flex');

            if (file) {
                reader.readAsDataURL(file);
            }
        });

        $('#imageUpload2').on('change', function() {
            var file = document.querySelector('input[id=imageUpload2]').files[0];
            var reader = new FileReader();

            reader.addEventListener("load", function() {
                $('#imagePreview2').removeAttr('poster');
                $('#imagePreview2').attr('src', reader.result);
                $('#imagePreview2').attr('controls', '');
            }, false);

            $(this).parents('.avatar-upload').find('.btn-del-file').css('display', 'flex');

            if (file) {
                reader.readAsDataURL(file);
            }
        });






        var doc = $(document);

        toastr.options = {
            timeOut: 3000,
            progressBar: true,
            showMethod: "slideDown",
            hideMethod: "slideUp",
            showDuration: 200,
            hideDuration: 200
        };

        doc.on('click', '.btn-notify-success', function() {
            toastr.success('لینک کپی شد');
        });







        new ClipboardJS('.btn-copy-clipboard');

        $('.btn-copy-clipboard').click(function() {

            $(this).addClass('copied');
            setTimeout(function() {
                $('.btn-copy-clipboard').removeClass('copied');
                $('.btn-copy-clipboard').next().blur();
            }, 3000);

        });


    });
</script>
