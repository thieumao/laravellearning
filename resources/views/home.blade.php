<a href="{{ route('learning') }}">Open Learning Screen</a>
<hr />
<a href="{{ route('test', ['id' => 8]) }}">Open Test 8</a>
<hr />
<a href="{{ route('test.part', ['id' => 8, 'partid' => 4]) }}">Open Test 8 - Part 4</a>
<hr />
<a href="{{ route('test.part.question', ['id' => 8, 'partid' => 4, 'questionid' => 2]) }}">Open Test 8 - Part 4 - Question 2</a>
<hr />
<a href="{{ route('user') }}">Open User Screen</a>
<hr />
<a href="/news/1">News 1</a>
<hr />
<a href="/news/1/category/2">Category 2</a>