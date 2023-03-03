<template>
    <div class="container">
        <h3>Welcome to Brain Power</h3>
        <p>Your best HRIS -- Human Resources Information Systems</p>
        <form>
            <img src="https://images.unsplash.com/photo-1566669437687-7040a6926753?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1974&q=80" alt="" width="200" class="mb-3 rounded">
            <div class="mb-3">
                <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Email Address">
            </div>
            <div class="mb-3">

                <input type="password" class="form-control" placeholder="Password">
            </div>
            <div id="emailHelp" class="form-text mb-3"><nuxt-link to="">Don't have an account? sign up</nuxt-link></div>
            <button type="submit" class="btn btn-primary mb-3">Login</button>
        </form>
    </div>
</template>

<script>

</script>

<style scoped>
.container {
    width: 100%;
    text-align: center;
    /* background-color: #0666a3; */
}

form {
    display: inline-block;
    margin: 0 auto;
    padding: 3px;
    width: 350px;
}
</style>