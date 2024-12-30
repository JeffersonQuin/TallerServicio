<!DOCTYPE html>
<html>
<head>
    <title>Startmin</title>
    <!-- Redirigir a la ruta definida de Laravel -->
    <meta http-equiv="refresh" content="0;url={{ route('index') }}">
</head>
<body>
<script language="javascript">
    // Redirigir usando JavaScript
    window.location.href = "{{ route('index') }}";
</script>
</body>
</html>