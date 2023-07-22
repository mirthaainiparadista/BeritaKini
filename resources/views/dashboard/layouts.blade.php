<h2>Hi, {{ auth()->user()->name }}</h2>
<div class="d-flex justify-content-start pt-2">
    <div>
        <a id="post" class="btn btn-success" href="/dashboard/posts" style="margin-right:7pt"><i
                class="bi bi-ui-checks"> </i>Posts</a>
    </div>
    <div>
        <a id="category" class="btn btn-warning" href="/dashboard/categories" style="margin-right:7pt"><i
                class="bi bi-ui-checks"> </i>Categories</a>
    </div>
    <form action="/logout" method="post"> 
        @csrf     
        <button class="btn btn-danger" type="submit">Logout</button>
    </form>

</div>