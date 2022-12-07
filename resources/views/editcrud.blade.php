
<div class="container">
    <form method="POST" action="/updatecrud">
    @csrf
    <input type="hidden" name='id' value="{{ $lists->id }}" /><br><br>
    <input type="text" name='title' value="{{ $lists->title }}" /><br><br>
    <input type="text" name='description' value="{{ $lists->description }}" placeholder="book Description" />
    <button>Update</button><a href="/crudlist">ALl Books</a>
</form>
</div>