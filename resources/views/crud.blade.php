


<script type="text/javascript" src="asset/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
$('#addfrom').on("submit", function(e)){
    e.preventDefault();

    $.ajax({
        type:"POST",
        url: "/submitCrud",
        data: $('#addform').serialize(),
        success:function(response){
            console.log(response)
            $('#addstudentmodal').modal('hide')
            alert("Data Saved");
        },
        error:function(error){
            console.log(error)
            alert("Data Not Saved");
        }
    });
});
});
</script>
<div class="container">
    <form method="POST" action="/submitCrud" id="addform">
    @csrf
    @if($errors->any())
        @foreach ($errors->all() as $err )
<li>{{ $err }}</li>                 
        @endforeach
    @endif
    <br><br>
    <input type="text" name='title' placeholder="book title" /><br><br>
    <input type="text" name='description' placeholder="book Description" />
    <input type="submit" value="submit" /><a href="/crudlist">ALl Books</a>
</form>
</div>


