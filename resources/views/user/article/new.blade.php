@extends('user.layouts.master')
@section('user')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Өгүүлэл илгээх</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('user.article.add') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Өгүүллийн гарчиг</label>
                                    <input type="text" name="title" class="form-control" placeholder="" />
                                </div>
                                <div class="form-group">
                                    <label>Зохиогч (ид)</label>
                                    <input type="text" name="authors" class="form-control"
                                        placeholder="Жишээ нь: Жонсон, M. C., Бат, А., Маам, Л." />
                                    <span class="mt-2 d-block">APA форматаар бичнэ үү.</span>
                                </div>

                                <div class="form-group">
                                    <label>Өгүүллийн хураангуй (Монгол хэлээр)</label>
                                    <textarea class="form-control" name="abstract_mn" rows="4"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Өгүүллийн хураангуй (Англи хэлээр)</label>
                                    <textarea class="form-control" name="abstract_en" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Түлхүүр үгс</label>
                                    <input type="text" name="keywords" class="form-control" />
                                    <span class="mt-2 d-block">APA форматаар бичнэ үү.</span>
                                </div>

                                <div class="form-group">
                                    <label>Өгүүллийн эх файл</label>
                                    <input type="file" name="file" class="form-control-file" accept="application/pdf">
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
@endsection
