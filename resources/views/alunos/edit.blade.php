<h2>Alterar Aluno</h2>
<form action="{{ route('alunos.update', $dados['id']) }}" method="POST">
   <!-- Token de Segurança -->
   <!-- Define o método de submissão como PUT -->
   @csrf
   @method('PUT')
   <a href="{{route('alunos.index')}}"><h4>voltar</h4></a>
   <label>Nome: </label> <input type='text' name='nome' value='{{$dados['nome']}}'>
   <label>E-mail: </label> <input type='text' name='email' value='{{$dados['email']}}'>
   <input type="submit" value="Salvar">
</form>