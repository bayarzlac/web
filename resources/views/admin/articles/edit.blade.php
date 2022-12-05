@extends('admin.layouts.master')
@section('admin')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Өгүүлэл илгээх</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.article.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Өгүүллийн гарчиг</label>
                                    <input type="hidden" name="id" value="{{ $article->id }}" />
                                    <input type="text" name="title" class="form-control" placeholder="" 
                                        value="{{ $article->title }}" required />
                                </div>
                                <div class="form-group">
                                    <label>Зохиогч (ид)</label>
                                    <input type="text" name="authors" class="form-control"
                                        placeholder="Жишээ нь: Жонсон, M. C., Бат, А., Маам, Л." 
                                        value="{{ $article->authors }}" required />
                                    <span class="mt-2 d-block">APA форматаар бичнэ үү.</span>
                                </div>
                                <div class="form-group">
                                    <label>Өгүүллийн хураангуй (Монгол хэлээр)</label>
                                    <textarea class="form-control" name="abstract_mn" rows="4" required>{{ $article->abstract_mn }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Өгүүллийн хураангуй (Англи хэлээр)</label>
                                    <textarea class="form-control" name="abstract_en" rows="4" required>{{ $article->abstract_en }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Түлхүүр үгс</label>
                                    <input type="text" name="keywords" class="form-control" value="{{ $article->keywords }}" required />
                                    <span class="mt-2 d-block">APA форматаар бичнэ үү.</span>
                                </div>

                                <div class="form-group">
                                    <label>Өгүүллийн эх файл</label>
                                    <input type="hidden" name="old_file" value="{{ $article->full_article_link }}" />
                                    <input type="file" name="file" class="form-control-file" accept="application/pdf" />
                                </div>

                                <div class="form-group">
                                    <label>Шууд хүлээн авах</label>
                                    <input name="approved" type="checkbox" name="approve" checked="{{ $article->approved != null ? true : false }}" />
                                </div>

                                <div class="form-group">
                                    <label>Нийтлэх дугаар</label>
                                    <select class="form-control" name="e_id">
                                        <option value="" selected>Сонгох</option>
                                        @foreach ($editions as $item)
                                            <option value="{{ $item->id }}">{{ $item->edition . ' (' . $item->number . ')' }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                                    <button type="submit" class="btn btn-primary btn-default">Хадгалах</button>
                                    <a href="{{ route('admin.article.details', $article->id) }}" class="btn btn-secondary btn-default">Буцах</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
