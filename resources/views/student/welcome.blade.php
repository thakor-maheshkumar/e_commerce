<!DOCTYPE html>
<html>
<head>
	<title>Student Registration</title>
</head>
<body>
	<h3>Welcome Students</h3>
	<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <span>Logout</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
</body>
</html>