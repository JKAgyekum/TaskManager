<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <br>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" float-end>
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white white:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <div class="card">
                            <div class="card-body">
                              <h1 class="card-title" style ="font-size: 45px">{{ $taskCount}}</h1>
                              <a href="{{route('task.index')}}" class="btn btn-dark">Total number of Tasks</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title" style ="font-size: 45px">{{ $completedCount}}</h5>
                              <a href="#" class="btn btn-primary">Total number of Completed Tasks</a>
                            </div>
                          </div>
                        </div>
                      </div>
                        <br>
                      <div class="row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title" style ="font-size: 45px">{{ $pendingCount}}</h5>
                              <a href="#" class="btn btn-info">Total number of Pending Task</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title" style ="font-size: 45px">{{$priorityH}}</h5>
                              {{-- <p class="card-text">Medium Priority</p> --}}
                              <a href="#" class="btn btn-danger">High Priority</a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <br>
                      <div class="row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title" style ="font-size: 45px">{{$priorityM}}</h5>
                              {{-- <p class="card-text">Medium Priority</p> --}}
                              <a href="#" class="btn btn-warning">Medium Priority</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title" style ="font-size: 45px">{{$priorityL}}</h5>
                              {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                              <a href="#" class="btn btn-success">Low Priority</a>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
