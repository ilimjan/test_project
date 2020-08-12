@extends('layouts.master')

@section('title', 'Комментарии')

@section('content')
    <div class="row clearfix" id="tabs">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Компании
                    </h2>
                </div>
                <div class="body">

                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#home_with_icon_title" data-toggle="tab">
                                <i class="material-icons">home</i>Компании
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
                            <b> Комментарии </b>
                            <div class="row">
                                <div class="col-sm-6 col-md-12" style="display: inline-block; width: 100%;">
                                    <div class="col-md-12">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Заголовок</th>
                                                <th>Описание</th>
                                                <th>Дата</th>
                                                <th>Новости компании</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($companies as $data)
                                                @include('cards.comment-card',compact('data'))
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
