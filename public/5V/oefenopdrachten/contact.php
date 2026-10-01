<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Paginatitel</title>
        <link rel="stylesheet" href="stylesheet.css" />
        <style>
            body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f7f6;
    color: #333;
    padding: 40px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* Koptekst */
h1 {
    color: #2c3e50;
    margin-bottom: 20px;
    font-size: 2rem;
    border-bottom: 2px solid #3498db;
    padding-bottom: 10px;
}

/* Tabel styling */
table {
    width: 100%;
    max-width: 500px;
    border-collapse: collapse;
    background-color: #ffffff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
}

/* Rij styling met zebra-effect */
tr:nth-child(even) {
    background-color: #f8f9fa;
}

tr:hover {
    background-color: #f1f3f5;
}

/* Cellen (labels en waarden) */
td {
    padding: 12px 20px;
    border-bottom: 1px solid #e9ecef;
    font-size: 1rem;
}

/* De linker kolom (labels) extra accentueren */
td:first-child {
    font-weight: bold;
    color: #7f8c8d;
    text-transform: capitalize;
    width: 35%;
}

/* E-mail link styling */
a {
    color: #3498db;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.2s ease;
}

a:hover {
    color: #2980b9;
    text-decoration: underline;
}
            </style>
    </head>
    <body>
       <h1> Mijn contactgegevens</h1>
        <table> 
            <tr> <td> gebruikersnaaam</td> <td> Skip</td></tr>
            <tr> <td> naam</td><td> Skip</td> </tr>
            <tr> <td> school</td> <td> Mgr. Frencken College</td></tr>
            <tr> <td> rol</td> <td> Leerling</td></tr>
            <tr> <td> emailadres</td><td> <a href="13904@frencken.info">Stuur een e-mail</a></td> </tr>



        </table>
    </body>

</html>