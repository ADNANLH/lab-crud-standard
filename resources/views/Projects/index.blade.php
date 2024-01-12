@extends('layouts.layout')
@include('layouts.nav')

@section('content')
<div style="min-height: 1302.4px;">
    <div class="" style="min-height: 1302.4px;">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Liste des projets</h1>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-sm-right">
                            <a href="./create.php" class="btn btn-info">
                                <i class="fas fa-plus"></i> Nouveau projet
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header col-md-12">
                                <div class=" p-0">
                                    <div class="input-group input-group-sm float-sm-right col-md-3 p-0">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Recherche">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body table-responsive p-0">
                                <table class="table table-striped text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Titre</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @include('Projects.projectSearch')
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
        </div>

    
@endsection