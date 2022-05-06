<x-header />

<div class="container" style="height:100vh; padding-left: 15%; padding-right: 15%;">
    <div style="align-content: center; background-color: rgba(255,255,255,.7); height: auto; padding: 25px;">
        <h2>Login</h2>
        <form method="POST" action="/auth">
            <!-- TODO:error 419 -->
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="form-group">
                <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>        
    </div>
</div>

<x-footer />