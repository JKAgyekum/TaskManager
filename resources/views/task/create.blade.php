<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Add Task
                                    <a href="{{ url('task') }}" class="btn btn-primary float-end">
                                        Back</a>
                                </h4>
                            </div>
                            <div class="card-body">
                           
                                <form action = "{{ route('task.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label>Title</label>
                                        <input type="text" name = 'title' class="form-control" />
                                        @error('title')
                                            <span class = "text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="mb-3">
                                        <label>Description</label>
                                        <textarea name = 'task_desc' class="form-control"></textarea>
                                        @error('description')
                                            <span class = "text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="priority">Priority</label>
                                            <select class="form-control" id="priority" name="priority">
                                                <option value="low">Low</option>
                                                <option value="medium">Medium</option>
                                                <option value="high">High</option>
                                            </select>
                                        </div>
                                        @error('priority')
                                            <span class = "text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label>Due Deadline</label>
                                        <br>
                                        <input type="date" name = "due_deadline" />
                                        @error('due_deadline')
                                            <span class = "text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-5">
                                        <label for="status">Status</label>
                                        <select class="form-control" id="status" name="status">
                                            <option value="pending" selected>Pending</option>
                                            <option value="completed">Completed</option>
                                            <option value="in-progress">In Progress</option>
                                        </select>
                                    </div>
                                    <div class="mb-5">
                                      <button type="submit" class="btn btn-primary">Save</button>
                                  </div>
                            </div>
                        </div>
                    </div>
</x-app-layout>
