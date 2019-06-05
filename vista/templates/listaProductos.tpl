    <h1>Bienvenido a esta página {$usuario}</h1> 
    <hr/>
    <h3>Listado de Productos</h3> {$listado}
    <hr/>
    <form action='logoff.php' method='POST'>
        <input type='submit' name='desconectar' value='Desconectar usuario {$usuario}' />
    </form>