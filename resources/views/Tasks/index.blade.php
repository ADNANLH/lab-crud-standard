@extends('layouts.master')

@section('content')
    <div class="content-wrapper" style="min-height: 1302.4px;">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>
                            @if (isset($project))
                                Tâches de {{ $project->nom }}
                            @else
                                Liste des tâches
                            @endif
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-sm-right">
                            <a href="{{ route('taches.create', ['projectId' => $project->id]) }}" class="btn btn-info">
                                <i class="fas fa-plus"></i> Nouveau Tâche
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
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="card">
                            <div class="card-header col-md-12">
                                <div class="d-flex justify-content-between">
                                    <div class="btn-group mr-3">
                                        <button type="button" class="btn btn-default dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa-solid fa-filter text-dark pr-2 border-right"></i>
                                            <input type="hidden" name="projectId" id="projectId" value="{{ $project->id }}">
                                            {{ $project->nom }}
                                        </button>
                                        <div class="dropdown-menu">
                                            @foreach ($projects as $project)
                                                <a class="dropdown-item"
                                                    href="{{ route('projects.tasks', ['projectId' => $project->id]) }}">{{ $project->nom }}</a>
                                            @endforeach
                                        </div>
                                    </div>


                                    <div class=" p-0">
                                        <div class="input-group input-group-sm">
                                            <input type="text" name="search-input" id="search-input" class="form-control"
                                                placeholder="Recherche">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
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
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @include('tasks.search')
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        <td></td>
                                        <td></td>
                                            <td colspan="3" class="text-center">{{ $tasks->links() }}</td>
                                        </tr>
                                    </tfoot>
                                </table>                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

            {{-- get modal delete task --}}
        <x-modal-delete-task />
    </div>



    
    <script>
        function deleteTask(taskId) {
            document.getElementById('Task_id').value = taskId;
            document.getElementById('deleteForm').action = "{{ route('taches.destroy', ':taskId') }}".replace(':taskId',
                taskId);
        }
    </script>
@endsection
