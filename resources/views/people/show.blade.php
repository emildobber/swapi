<h1>{{ $person->name }}</h1>
<li>{{ $person->height}}</li>
<li>{{ $person->birth_year }}</li>
<li>{{ $person->gender }}</li>
<li>{{ $person->planet->name ?? "" }}</li>
<li>{{ $person->species->name ?? "" }}</li>
