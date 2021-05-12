<link rel="stylesheet" href="{{asset("assets/css/loading.css")}}">

<div class="content">
    <div class="loading">
        <p>loading</p>
        <span></span>
    </div>
</div>

<script>
    window.onload = function (){
        var contenedor = document.getElementById('content');

        contenedor.style.visibility = 'hidden';
        contenedor.style.opacity = '0'
    }
</script>
