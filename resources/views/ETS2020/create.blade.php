<h2>Learning Form</h2>
<style>
  input { margin-bottom: 16px; }
</style>
<form action="{{ route('learning.update') }}" method='post'>
  @csrf
  <input type="text" name="fullname" placeholder="Full Name" />
  <br />
  <input type="text" name="email" placeholder="Email" />
  <br />
  <input type="text" name="password" placeholder="Password" />
  <br />
  <button type="submit">Register</button>
</form>