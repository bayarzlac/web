@extends('admin.layouts.master')
@section('admin')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Шинэ дугаар үүсгэх</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.edition.add') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Дэс дугаар</label>
                                    <input type="text" name="number" class="form-control" placeholder="182" />
                                </div>
                                <div class="form-group">
                                    <label>Дугаар</label>
                                    <input type="text" name="edition" class="form-control" placeholder="2022/06" />
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label>Сэтгүүлийн агуулга</label>
                                    <textarea id="editor" name="content"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Сэтгүүлийн бүтэн файл</label>
                                    <input type="file" name="file" class="form-control-file">
                                    <span class="mt-2 d-block">Дугаарыг бүтнээр оруулах бол энд оруулна уу.</span>
                                </div>

                                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                                    <button type="submit" class="btn btn-primary btn-default">Илгээх</button>
                                    <button type="submit" class="btn btn-secondary btn-default">Болилоо</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
