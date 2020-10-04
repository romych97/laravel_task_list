<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style>
form.formInline {
    margin: 0px;
    padding: 0px;
    display: inline;
    height: 0px;
    margin-left: -6px;
}

td a {
    padding-right: 7px;
}

td a, form {
    padding-right: 7px;
    vertical-align: sub;
}

.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    vertical-align: middle;
}

td.rightTD {
    text-align: center;
}

td.number {
    text-align: center;
    border-right: 1px solid #ddd;
    font-size: 14px;
}

td.rightTD {
    border-left: 1px solid #ddd;
}

button.deleteButton {
    background-color: #3330;
    border: 0px;
    color: #337ab7;
}

button.deleteButton:hover {
    color: #275780;
}
</style>
</head>
<body>
    @yield('content')
</body>
</html>