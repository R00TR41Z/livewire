<div class="container mt-5">
    <form method="post" class="form-group" wire:submit.prevent="create">
       <div class="d-flex flex-column">
        <div class="col mb-2">
            <input name="text" class="form-control" placeholder="Tweet title" type="text" id="title" wire:model="title"/>
        </div>
        <div class="col mb-2">
            <textarea class="form-control" wire:model="content" placeholder="Tweet content"></textarea>
        </div>
        <div class="col mb-2">
            <button class="btn btn-lg btn-primary">Create Tweet</button>
        </div>
       </div>
    </form>
    <hr/>
        <div class="col">
            <table class="table borderd">
                <thead>
                    <th>Author</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach($tweets as $tweet)
                    <tr>
                        <td>{{ $tweet->user->name }}</td>
                        <td>{{ $tweet->title }}</td>
                        <td>{{ $tweet->content }}</td>
                        <td>
                            <button class="btn btn-primary"><i class="fa fa-thumbs-up"></i></button>
                            <button class="btn btn-danger"><i class="fa fa-thumbs-down"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $tweets->links() }}
        </div>
</div>
