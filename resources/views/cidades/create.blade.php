<h2>Cadastrar Cidade</h2>
<form action="{{ route('cidades.store') }}" method="POST">
   <!-- Token de segurança salvo na sessão, verificar o formulário submetido -->
   @csrf
   <a href="{{route('cidades.index')}}"><h4>voltar</h4></a>
   <label>Nome: </label> <input type='text' name='nome'>
   <select name="Porte">

      <option value="pequeno">Pequeno</option>
      <option value="medio">Medio</option>
      <option value="grande">Grande</option>
  
   </select>
   <input type="submit" value="Salvar">
</form>