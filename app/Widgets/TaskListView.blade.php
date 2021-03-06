{{--
Here you will have access to :

1 - "$data" (data from controller) and
2 - "$params" (data passed to @widget('name', $params) call).

try : {!! dd($data, $params) !!} to see what you have.
--}}
@php(extract($data))
@php(extract($params))

<div class="tab-pane {{{ $status ?? '' }}}" id="{{ $tab }}">
    <h1>
        {{ $title }}
    </h1>

    <div class="table-responsive">
        @if(!$tasks->isEmpty())
            <table class="table table-striped task-table table-condensed">
                <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th colspan="3">Status</th>
                </thead>
                <tbody>
                @foreach($tasks as $task)
                    @include('tasks.partials.task-row')
                @endforeach
                </tbody>
            </table>
        @else
            <br>
            <h4 class="text-center">No task has the state</h4>
        @endif
    </div>
</div>
