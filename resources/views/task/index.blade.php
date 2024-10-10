<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Task') }}
        </h2>
        <br>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" float-end>
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Task List
                                    <a href="{{ route('task.create') }}" class="btn btn-primary float-end">Add New
                                        Task</a>
                                </h4>
                            </div>
                            <div class="card-body">
                                @session('success')
                                    <div class="alert alert-success">{{ $value }}</div>
                                @endsession
                                <table class = "table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                         
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Priority</th>
                                            <th>Due Deadline</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($tasks as $task) 
                                                <td>{{ $task->title }}</td>
                                                <td>{{ $task->task_desc }}</td>
                                                <td>{{ $task->priority }}</td>
                                                <td>{{ $task->due_deadline }}</td>
                                                <td>{{ $task->status }}</td>

                                                <td>
                                                    <form action="{{ route('task.destroy', $task->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')

                                                        <a href="{{ route('task.edit', $task->id) }}"
                                                            class="btn btn-success" >Edit</a>
                                                        <a href="{{ route('task.show', $task->id) }}"
                                                            class="btn btn-warning">Show</a>

                                                        <button class="btn btn-danger">Delete</button>
                                                    </form>

                                                </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




</x-app-layout>
