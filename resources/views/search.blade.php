<!DOCTYPE html>
<html>
<head>
    <title>User Management System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Search</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" id="search" class="form-control" placeholder="Search by Name/Designation/Department">
                </div>
            </div>
        </div>
        <div class="row" id="user-table">
            @foreach($users as $user)
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $user->name }}</h5>
                        <p class="card-text">{{ $user->designation->name }}</p>
                        <p class="card-text">{{ $user->department->name }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var query = $(this).val();
                $.ajax({
                    url: '{{ route("users.search") }}',
                    type: 'GET',
                    data: { query: query },
                    success: function(data) {
                        $('#user-table').empty();
                        data.forEach(function(user) {
                            var cardHtml = '<div class="col-md-6">' +
                                '<div class="card">' +
                                '<div class="card-body">' +
                                '<h5 class="card-title">' + user.name + '</h5>' +
                                '<p class="card-text">' + user.designation.name + '</p>' +
                                '<p class="card-text">' + user.department.name + '</p>' +
                                '</div>' +
                                '</div>' +
                                '</div>';
                            $('#user-table').append(cardHtml);
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>
