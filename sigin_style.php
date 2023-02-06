<style>
    body,html{
        height:90%;
        background:#dde1e7;
        font-family: Cooper Black;
    }
    #formulaire{
        display:flex;
        flex-direction:column;
        justify-content:space-around;
        align-items:center;
        background:#dde1e7;
        height:70%;
        width:25%;
        margin:100px auto;
        border-radius:40px;
        box-shadow:5px 5px 8px #cbcfd5,-5px -5px 8px #eff3f9;
    }
    input{
        background:#dde1e7; 
        border-radius:50px;
        width:60%;
        height:15%;
        text-align:center;
        font-size:12pt;
        font-family: Cooper Black;
        border:none;
        box-shadow:inset 5px 5px 8px #cbcfd5,inset -5px -5px 8px #eff3f9;
    }
    input[type=submit]{
        box-shadow:5px 5px 8px #cbcfd5,-5px -5px 8px #eff3f9;
    }
    input[type=submit]:active{
        box-shadow:inset 5px 5px 8px #cbcfd5,inset -5px -5px 8px #eff3f9;
    }
    h1{
        text-shadow:0 0 10px #000;
    }
    a{
        text-decoration:none;
    }
    #erreur{
        color:red;
        font-size:8pt;
        font-family:arial;
    }
</style>