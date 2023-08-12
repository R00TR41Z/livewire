<div>
    <h1>Hello world</h1>
    <h3>Ola {{ $name }}!</h3>
    <input name="text" placeholder="Seu nome" type="text" id="text" wire:model="name"/>
    <hr/>
    @foreach($tweets as $tweet)
        <p>Author: {{ $tweet->user->name }}</p>
        <p>title: {{ $tweet->title }}</p>
        <p>content: {{ $tweet->content }}</p>
    @endforeach
</div>
